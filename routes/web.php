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
Route::get('/index1', function () {
    return 'hi i am index';
});


// Route::get('/contact',function(){
//     $tasks = [
//         'task',
//         'task',
//         'task'
//     ];

    // $tasks = [
    //     'task_1' => 'php',
    //     'task_2' => 'html',
    //     'task_3' => 'laravel'
    // ];
//     return view('contact',compact('tasks'));
// });
// Route::get('/contact',function(){
    // $tasks = [
    //     'task',
    //     'task',
    //     'task'
    // ];

    // $tasks = [
    //     'task_1' => 'php',
    //     'task_2' => 'html',
    //     'task_3' => 'laravel'
    // ];
    // return view('contact',compact('tasks'));
// });


Route::get('/contact', function () {
    $name = $_REQUEST['name'];
    return view('contact', compact('name'));
});
