<?php

use App\Http\Controllers\FrontController;
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

 //            frontend route 










Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('service',[FrontController::class,'service'])->name('service');
Route::get('service-details',[FrontController::class,'details'])->name('details');
Route::get('Contact-Us',[FrontController::class,'contact'])->name('contact-us');
Route::get('about-Us',[FrontController::class,'about'])->name('about-us');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
