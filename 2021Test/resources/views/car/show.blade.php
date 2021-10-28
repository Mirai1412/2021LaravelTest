<x-app-layout>
    <head>
        <style>
            body{
                width: 80%;
                margin: 0 auto;
                margin-top: 10px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body >
        <x-slot name="header" >
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight"
                style="text-align: center">
                {{ __('CAR STATUS') }}
            </h2>
        </x-slot>
        <div style="padding: 50px 0">
            <div class="container mx-auto max-w-sm bg-white rounded-xl shadow-lg hover:scale-105 hover:shadow-2xl transform transition-all duration-500">
                <div class="flex items-center justify-between px-4">
                  <div class="flex justify-between items-center py-4">
                    <img class="w-12 rounded-full" src="https://d2qp0siotla746.cloudfront.net/img/use-cases/profile-picture/template_0.jpg" alt="Alex" />
                    <div class="ml-3">
                    <h1 class="text-xl font-bold text-gray-800 cursor-pointer">  {{$car->user->name}}</h1>
                    <p class="text-sm text-gray-800 hover:underline cursor-pointer"> {{ $car->updated_at->diffForHumans() }}</p>
                    </div>
                  </div>
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                  </div>
                </div>
                @if($car->image)
                <img
                    src="{{'/storage/images/'.$car->image }}"
                    class="card-img-top"
                    alt="my post image">
                    @else
                    <span style="margin: 0 0 0 130px">첨부 이미지 없음</span>
                    @endif
                <div class="p-6" style="padding: 24px 40px ">
                  <h1 class="text-3xl font-bold text-gray-800 cursor-pointer ">car name : {{ $car->name }}</h1>
                  <p class="text-lg font font-thin"> 회사 : {{ $car->company }}</p>
                  <p class="text-lg font font-thin"> 제조년도 : {{ $car->year }}</p>
                  <p class="text-lg font font-thin"> 가격 : {{ $car->price }}(기준 : $만달러)</p>
                  <p class="text-lg font font-thin"> 차종 : {{ $car->kind }}</p>
                  <p class="text-lg font font-thin"> 외형 : {{ $car->style }} </p>

                </div>
                @auth
                <form
                action="{{ route('delete',['id'=>$car->id]) }}"
                method="post">
                @csrf @method("delete")
                <div class="dtn" style="margin: 0 10%; width: 100%;">
                    <button
                        style="margin-bottom: 10px;
                        width: 80%;"
                        type="submit"
                        class="border-2 border-red-500 rounded-lg font-bold text-red-500
                        px-4 py-3 transition duration-300 ease-in-out hover:bg-red-500 hover:text-white mr-6">
                        DELETE</button>
                </div>
                </form>
                <a href="{{ route('edit', ['car'=>$car->id]) }}" class="card-link" style="margin:20px 0 20px 157px;">수정하기</a>
                @endauth
                </div>
        </div>
    </body>
</x-app-layout>
