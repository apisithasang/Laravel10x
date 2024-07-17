<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\blogs;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
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


Route::get('/',[BlogsController::class,'index'])->name('welcome');


Route::prefix('author')->group(function(){
   Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');

   Route::get('/insertdata',[AdminController::class,'index'])->name('insertdata');
   
   Route::post('/insert',[AdminController::class,'insert']);
   
   Route::get('/delete/{id}',[AdminController::class,'Delete'])->name('delete');
   
   Route::post('/update/{id}',[AdminController::class,'Update'])->name('update');

});



Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');