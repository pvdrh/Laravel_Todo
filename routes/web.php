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
    return view('welcome');
});

Route::post('save/aaaa324t45fcsa', function () {
    echo 'post';
})->name('save');

Route::get('/hello1', function() {
    return view('hello1');
});

Route::get('/hello2', function() {
    return view('hello2');
});

// Route::match(['get', 'post'], 'save', function(){
//     echo 'get post';
// });

Route::get('user/{id?}', function($i = null){
    echo route('java');
    return 'User ' . $i;
});

route::get('u/{id?}', function($i = null){
    $url = route('java');
    echo $url;
    return 'user ' . $i;
});

//Nhom route
Route::prefix('quanly')->group(function(){
    Route::get('users',function(){
        echo 'admin/users';
    });

    Route::get('/group', function(){
        echo 'admin/class/lesson';
    });

    Route::get('/class', function(){
        echo 'admin/class/edit';
    });
});

// Route::group([
//     'prefix' => 'zent'
//  ], function (){
//     Route::get('/group', function(){
//         echo 'admin/class/lesson';
//     });

//     Route::get('/class', function(){
//         echo 'admin/class/edit';
//     });
//  });

//  Route::get('task/complete/3', function(){
//     echo 'Đây là tính năng hoàn thành';
//  });

//  Route::get('task/reset/3', function(){
//     echo 'Đây là tính năng làm lại';
//  });

 Route::group([
    'prefix' => 'task'
 ], function (){
    Route::get('complete/3', function(){
        echo 'Đây là tính năng hoàn thành';
     });

     Route::get('reset/3', function(){
        echo 'Đây là tính năng làm lại';
     });
 });



 Route::group([
    'prefix' => 'tasks'
 ], function (){
    Route::get('create', function() {
        return view('tasks.create');
    })->name('task.create');

    Route::get('edit', function() {

        $name = "Hoc lap trinh";

        //cách 1
        // return view('tasks.edit', [
        //     'name'=>$name
        // ]);

        //cách 2
        return view('tasks.edit')->with(['name' => $name]);

    })->name('task.edit');

    Route::get('list', function() {
        return view('tasks.list', [
            'records' => [
                1,2,3
            ],
            'i' => 2
        ]);
    })->name('task.list');
 });

