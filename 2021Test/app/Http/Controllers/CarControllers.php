<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarControllers extends Controller
{

    public function index()
    {
        $car = Car::latest()->paginate(5);

        return view('car.index',['cars'=>$car]);
    }

    public function mycar(){

        Auth::user()->id; //로그인 한사람의 아이디를 가져온다
        $user = User::find(Auth::user()->id);
        $car = $user->cars()->paginate(5);

        return view('car.mycar',['cars'=>$car]);
    }

    public function show($id)
    {
        $car = Car::find($id);

        return view('car.show', ['car'=>$car]);
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

        'company'=>'required',
        'name'=>'required',
        'year'=>'required',
        'price'=>'required',
        'kind'=>'required',
        'style'=>'required',
        ]);

       $fileName = null;
       if($request->hasFile('image')) {
       $fileName = time().'_'.
       $request->file('image')->getClientOriginalName();
       $path = $request->file('image')
           ->storeAs('public/images', $fileName);
       }

       $input = array_merge($request->all(),
           ["user_id"=>Auth::user()->id]);

       if($fileName) {
       $input = array_merge($input, ['image' => $fileName]);
       }


       Car::create($input);

       return redirect()->route('index');
    }

    public function destroy(Request $request, $id)
    {
        $car = Car::find($id);

        if($car->image) {
            Storage::delete('public/images/'.$car->image);
        }

        $page  = $request->page;
        $car->delete();

        return redirect()->route('index',['page'=>$page]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company'=>'required',
            'name'=>'required',
            'year'=>'required',
            'price'=>'required',
            'kind'=>'required',
            'style'=>'required',
            ]);

        $car = Car::find($id);

        $car->company = $request->company;
        $car->name = $request->name;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->kind = $request->kind;
        $car->style = $request->style;

        if($request->image) {

            if($car->image) {
                Storage::delete('public/images/'.$car->image);
            }
            $fileName = time().'_'.
                $request->file('image')->getClientOriginalName();
                $car->image = $fileName;
                $request->image->storeAs('public/images', $fileName);
        }
        $car->save();

        return redirect()->route('car.show',  ['car'=>$car]);
    }

    public function edit($id)
    {
        $car = Car::find($id);

        return view('car.edit', ['car'=>$car]);
    }
}
