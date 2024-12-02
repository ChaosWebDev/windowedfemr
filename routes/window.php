<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WindowController;

Route::get('/quit', [WindowController::class, 'quit'])->name('quit');
