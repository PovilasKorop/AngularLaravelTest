<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('questions', function () {
    return response()->json([
        ['id' => 1, 'question' => 'self managing'],
        ['id' => 2, 'question' => 'disliking pressure'],
        ['id' => 3, 'question' => 'talkative'],
        ['id' => 4, 'question' => 'curious'],
        ['id' => 5, 'question' => 'argumentative'],
    ]);
});
