<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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
// Frontend  route
Route::get('/', function () {
    return view('frontend/home/home');
});

Route::get('/naim', function () {
    return view('hello_page');
})->name('hello');

Route::get('/login/user',[MyController::class,'showLogin'])->name('login');


Route::get('/naim/id/hello', function () {
    echo "This is webpage";
})->name('naim_page');