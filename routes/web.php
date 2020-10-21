<?php

use App\Http\Controllers\Frontend\TaskController;
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
    return view('welcome');
});

 Route::get('/',
    [\App\Http\Controllers\HomeController::class, 'index']
);
// Route::prefix('task')
// ->group(function(){
//     Route::get('/create', [
//         \App\Http\Controllers\Task\TaskController::class, 'create'])
//         ->name('tasks.create');

//     Route::get('/edit', [
//         \App\Http\Controllers\Task\TaskController::class, 'create'])
//         ->name('tasks.edit');

//     Route::get('/list', [
//         \App\Http\Controllers\Task\TaskController::class, 'create'])
//         ->name('tasks.list');
// });

// Route::resource('frontend/task', \Frontend\TaskController::class);
// Route::get('frontend/task', 'TaskController@index');

// Route::prefix('frontend/task')
// ->group(function(){
//     Route::get('/',[TaskController::class, 'index'])->name('task.index');
//     Route::get('/{id}',[TaskController::class, 'show'])->name('task.show');
//     Route::get('/{id}/edit',[TaskController::class, 'edit'])->name('task.edit');
//     Route::delete('/destroy/{id}',[TaskController::class, 'destroy'])->name('task.delete');
//     Route::put('/update/{id}',[TaskController::class, 'update'])->name('task.update');
//     Route::post('/store',[TaskController::class, 'store'])->name('task.store');
//     Route::get('/create',[TaskController::class, 'create'])->name('task.create');
//     Route::get('/complete/{id}',[TaskController::class, 'complete'])->name('task.complete');
//     Route::get('/reComplete/{id}',[TaskController::class, 'reComplete'])->name('task.reComplete');

// });

Route::get('task/create', [
    \App\Http\Controllers\Task\TaskController::class, 'create'])
    ->name('task.create');

    Route::post('task/store', [
        \App\Http\Controllers\Task\TaskController::class, 'store'])
        ->name('task.store');

    Route::get('', [
        \App\Http\Controllers\Task\TaskController::class, 'index'])
        ->name('task.index');

    Route::delete('task/destroy/{id}', [
        \App\Http\Controllers\Task\TaskController::class, 'destroy'])
        ->name('task.delete');

    Route::put('task/update/{id}', [
        \App\Http\Controllers\Task\TaskController::class, 'update'])
        ->name('task.update');

    Route::get('/Complete/{id}', [
        \App\Http\Controllers\Task\TaskController::class, 'Complete'])
        ->name('task.complete');


    Route::get('task/{id}/edit}', [
        \App\Http\Controllers\Task\TaskController::class, 'edit'])
        ->name('task.edit');

    Route::get('/reComplete/{id}', [
        \App\Http\Controllers\Task\TaskController::class, 'reComplete'])
        ->name('task.reComplete');

     
        









 