<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::group(['prefix'=>'/patient', 'as'=>'patient.'],function() {
    Route::post('/select',[PatientController::class,'select'])->name('select');
});
