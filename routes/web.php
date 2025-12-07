<?php

use App\Livewire\Converters\LengthConverter;
use App\Livewire\Converters\TemperatureConverter;
use App\Livewire\Converters\TimeConverter;
use App\Livewire\Converters\WeightConverter;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

// Converters
Route::prefix('converters')->name('converters.')->group(function () {
    Route::get('/length', LengthConverter::class)->name('length');
    Route::get('/weight', WeightConverter::class)->name('weight');
    Route::get('/time', TimeConverter::class)->name('time');
    Route::get('/temperature', TemperatureConverter::class)->name('temperature');
});
