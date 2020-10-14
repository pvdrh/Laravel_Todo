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

Route::resource('frontend/task', \Frontend\TaskController::class);
// Route::get('frontend/task', 'TaskController@index');

Route::prefix('frontend/task')
->group(function(){
    Route::get('/',[TaskController::class, 'index']->name('task.index'));

    Route::get('/',[TaskController::class, 'show']->name('task.show'));

    Route::get('/',[TaskController::class, 'edit']->name('task.edit');

    Route::delete('/',[TaskController::class, 'destroy']->name('task.destroy');

    Route::put('/',[TaskController::class, 'update']->name('task.update');

    Route::post('/',[TaskController::class, 'store']->name('task.store');

    Route::get('/create',[TaskController::class, 'create']->name('task.store');

});









 