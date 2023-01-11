<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;
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

Route::get('/about', function () {
    return view('frontend/about/about');
})->name('about');


Route::get('/contact', function () {
    return view('frontend/contact/contact');
})->name('contact');

Route::get('/jobs', function () {
    return view('frontend/jobs/index');
})->name('jobs');


Route::get('/test',[HomeController::class,'test']);


Route::get('/naim/id/hello', function () {
    echo "This is webpage";
})->name('naim_page');


//User login registration

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';



//Admin Route
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified','role:admin'])->name('dashboard');
// require __DIR__.'/auth.php';

// here admin/login cannot redirect to admin dashboard
 Route::get('/admin/login',[AdminController::class,'index'])->name('admin.login'); //down for above issue

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified','role:admin'])->name('admin.dashboard');
require __DIR__.'/auth.php';






Route::middleware(['auth', 'verified','role:admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/home', function () {
         return "hello";
    });

   Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
    });

    Route::get('/jobs',[JobController::class,'index'])->name('jobs');
    Route::get('/jobs/category',[JobController::class,'category'])->name('jobs.category');
    Route::get('/jobs/category/create',[JobController::class,'category_create'])->name('jobs.category.create');
    Route::post('/jobs/category/create',[JobController::class,'category_store'])->name('job.category.store');
});