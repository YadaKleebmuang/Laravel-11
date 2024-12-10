<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\JoinController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function() {
    return view('about');
});
Route::controller (PostController::class)->group(function(){
    Route::get('/home','index');
    Route::get('/create','create');
});
Route::controller (JoinController::class)->group(function(){
    Route::get('/inner-join','InnerJoin');
    Route::get('/left-join','LeftJoin');
    Route::get('/right-join','RightJoin');
    Route::get('/full-outer-join','FullOuterJoin');
});