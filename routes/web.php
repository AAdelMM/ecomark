<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;


Route::group(['prefix' => 'en'], function () {
    Route::get('/', [HomeController::class, 'indexEn'])->name('home.en');
    
    // Add more routes as needed
});

Route::group(['prefix' => 'ar'], function () {
    Route::get('/', [HomeController::class, 'indexAr'])->name('home.ar');
    
    // Add more routes as needed
});



Route::get('/', function () {
    // This function will be executed when a user visits the root URL (/)
    return view('en.home');
  });
