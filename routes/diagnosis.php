<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosisController;

Route::group(['prefix' => 'diagnosis', 'as' => 'diagnosis.'], function () {
    Route::get('/', [DiagnosisController::class, 'index'])->name('index');
    Route::get('/create', [DiagnosisController::class, 'create'])->name('create');
    Route::get('/print', [DiagnosisController::class, 'print'])->name('print');
    Route::get('/{id}', [DiagnosisController::class, 'edit'])->name('edit');

    Route::post('/', [DiagnosisController::class, 'store'])->name('store');
    Route::put('/{id}', [DiagnosisController::class, 'update'])->name('update');

    Route::delete('/{id}', [DiagnosisController::class, 'destroy'])->name('destroy');
});
