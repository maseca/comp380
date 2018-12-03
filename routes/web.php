<?php

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
    return view('projects');
});

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/actionitems', function () {
    return view('actionitems');
});

Route::get('/deliverables', function () {
    return view('deliverables');
});

Route::get('/issues', function () {
    return view('issues');
});

Route::get('/resources', function () {
    return view('resources');
});
