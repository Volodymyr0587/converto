<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\Converters\LengthConverter;

Route::get('/', Home::class)->name('home');

// Конвертери
Route::prefix('converters')->name('converters.')->group(function () {
    Route::get('/length', LengthConverter::class)->name('length');
    // Route::get('/weight', WeightConverter::class)->name('weight');
});
