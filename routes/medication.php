<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicationController;

Route::group(['prefix' => 'medication', 'as' => 'medication.'], function () {
    Route::get('/', [MedicationController::class, 'index'])->name('index');
    Route::get('/create', [MedicationController::class, 'create'])->name('create');
    Route::get('/print', [MedicationController::class, 'print'])->name('print');
    Route::get('/{medication}', [MedicationController::class, 'edit'])->name('edit');

    Route::post('/index', [MedicationController::class, 'index']);

    Route::put('/{medication}', [MedicationController::class, 'update'])->name('update');
    Route::delete('/{medication}', [MedicationController::class, 'destroy'])->name('destroy');
});
