<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome' , [
       'tasks' => [
            'Go to the gym',
            'Eat something',
       ]
    ]);
});