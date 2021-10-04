<?php

use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class ,'index'])->name('pages.Home');
Route::get('/pages/create',[PagesController::class,'Create'])->name('create');

Route::post('/pages/create',[PagesController::class,'CreateSubmit'])->name('create');
Route::get('/pages/login',[PagesController::class,'Login'])->name('login');
Route::post('/pages/login',[PagesController::class,'LoginSubmit'])->name('login');
Route::get('/pages/list',[PagesController::class,'List'])->name('List');