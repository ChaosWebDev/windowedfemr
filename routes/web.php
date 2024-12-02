<?php

use App\Http\Controllers\View\DashboardController;
use Illuminate\Support\Facades\Route;

require __DIR__ . "/menu.php";
require __DIR__ . "/medication.php";
require __DIR__ . "/diagnosis.php";
require __DIR__ . "/patient.php";
require __DIR__ . "/window.php";

Route::get('/', [DashboardController::class, 'render'])->name('dashboard');
Route::get('/report', [DashboardController::class, 'report'])->name('report');
