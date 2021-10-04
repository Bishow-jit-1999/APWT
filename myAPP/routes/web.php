<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyPageController;
use App\Http\Controllers\Mypage;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/hello',function(){
    return view('hello');
});

Route::get('/Hi',function(){
    return view("hi");
});

Route::get('/page', [Mypage::class,'mydetails'])->name('page');

Route::get('/',[CompanyPageController::class,'index'])->name('Home');
Route::get('/Service',[CompanyPageController::class,'ourservice'])->name('Service');
Route::get('/Ourteam',[CompanyPageController::class,'our_teams'])->name('Teams');
Route::get('/Aboutus',[CompanyPageController::class,'about_us'])->name('About_US');
Route::get('/Contactus',[CompanyPageController::class,'contact_us'])->name('Contact_US');