<?php

use App\Http\Controllers\CarControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/index', [CarControllers::class, 'index'])->name('index');
Route::get('/mycar', [CarControllers::class, 'mycar'])->name('mycar');
Route::get('/show/{id}', [CarControllers::class, 'show'])->name('show');
Route::get('/create', [CarControllers::class, 'create'])->name('create');
Route::post('/store', [CarControllers::class, 'store'])->name('store');
Route::delete('/{id}',[CarControllers::class, 'destroy'])->name('delete');

Route::get('/edit/{car}',[CarControllers::class, 'edit'])->name('edit');
Route::patch('/update',[CarControllers::class, 'update'])->name('update');
