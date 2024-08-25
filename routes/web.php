<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[TestController::class , 'testAction']);


//1- define a new route that the user can acess in the browser
//2- define controller that render the view
//3- define view that contains a list of blogs
//4- remove any static html data from the view