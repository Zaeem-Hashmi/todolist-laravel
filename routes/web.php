<?php

use App\Http\Controllers\TaskController;
use Illuminate\Console\View\Components\Task;
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
    return view('welcome');
});

Route::middleware('auth')->group(function(){
     Route::get('task/view',[TaskController::class,'show'])->name('task.view');
     Route::get('task/add',[TaskController::class,'add'])->name('task.view');
     Route::post('task/store',[TaskController::class,'store'])->name('task.store');
     Route::get('task/edit/{id}',[TaskController::class,'edit'])->name('task.edit');
     Route::delete('task/delete/{id}',[TaskController::class,'delete'])->name('task.delete');
     Route::put('task/update',[TaskController::class,'update'])->name('task.update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
