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

Route::prefix('frontend/task')
->group(function(){
    Route::get('/',
    [TaskController::class, 'index']
    );

    Route::get('/',
    [TaskController::class, 'show']
    );

    Route::get('/',
    [TaskController::class, 'edit']
    );

    Route::get('/',
    [TaskController::class, 'destroy']
);

Route::get('/',
    [TaskController::class, 'update']
);

Route::get('/',
    [TaskController::class, 'store']
);

Route::get('/',
    [TaskController::class, 'create']
);

});









 