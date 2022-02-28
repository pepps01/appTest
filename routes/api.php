<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/user', function(){
    Request::all();
    return  response()->json([
        "greet"=> "Welcome to the appService"
    ]);
});

Route::get('/relate', function(){
        return response()->json([
            "message"=> "Welcome"
        ]);
    // DB_DATABASE=laravel
// DB_USERNAME=root
// DB_PASSWORD=
});