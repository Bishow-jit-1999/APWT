<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/',[PagesController::class ,'index'])->name('Home');
Route::get('/addproduct',[PagesController::class ,'add'])->name('add');

Route::post('/addproduct',[PagesController::class ,'addSubmit'])->name('add');
Route::get('/view/product',[PagesController::class ,'list'])->name('view_product');

Route::get('/edit/{id}/{Name}',[PagesController::class ,'edit']);
Route::post('/edit',[PagesController::class ,'editSubmit'])->name('editlist');


Route::get('/delete',[PagesController::class ,'Delete'])->name("deletepage");
Route::post('/delete',[PagesController::class ,'DeleteSubmit'])->name('deleteitem');