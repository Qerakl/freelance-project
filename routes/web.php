<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\TovarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/login', function () {
    if(Auth::check()){
        return redirect('/');   
    }
    return view('login');
})->name('login');

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');


//товары
Route::get('/catalog', [TovarController::class, 'index'])->name('catalog');
Route::get('/show/{id}', [TovarController::class, 'show']);

//админ
Route::resource('/admin', AdminController::class);

//корзина
Route::get('/basket/{id}', [BasketController::class, 'add_basket'])->name('basket');
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::post('/up-basket', [BasketController::class, 'up_count_basket'])->name('up-basket');;