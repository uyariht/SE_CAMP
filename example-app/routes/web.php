<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestfinalController;

Route::get('/', function () {
    return view('welcome'); //welcome.blade.php
});

Route::resource("/testfinal", TestfinalController::class);
