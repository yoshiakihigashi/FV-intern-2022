<?php

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
    return redirect()->route('todo.index');
});

Auth::routes();

Route::get('/home', function () {
    return redirect()->route('todo.index');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');
    Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todo.create');
    Route::post('/todos/create', [App\Http\Controllers\TodoController::class, 'store'])->name('todo.store');
    Route::get('/todos/edit/{id}', [App\Http\Controllers\TodoController::class, 'edit'])->name('todo.edit');
    Route::post('/todos/edit/{id}', [App\Http\Controllers\TodoController::class, 'update'])->name('todo.update');
    Route::put('/todos/complete/{id}', [App\Http\Controllers\TodoController::class, 'complete'])->name('todo.complete');
    Route::delete('/todos/delete/{id}', [App\Http\Controllers\TodoController::class, 'delete'])->name('todo.delete');
    Route::get('/todos/new', [App\Http\Controllers\TodoController::class, 'orderNew'])->name('todo.oderNew');

});
