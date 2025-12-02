<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome'); // main page

// specific converters:
Route::view('/converter/length', 'converter.length');
Route::view('/converter/mass', 'converter.mass');
Route::view('/converter/temperature', 'converter.temperature');
