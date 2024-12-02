<?php


use Illuminate\Support\Facades\Route;
use App\Models\Patient;

// Save action
Route::get('/nativephp/save', function () {
    return 'Data saved!';
})->name('nativephp.save');

// Exit action
Route::get('/nativephp/exit', function () {
    exit(0);
})->name('nativephp.exit');

// View patient action
Route::get('/nativephp/view-patient/{id}', function ($id) {
    $patient = Patient::find($id);
    return view('patients.view', ['patient' => $patient]);
})->name('nativephp.viewPatient');

// Create medication action
Route::get('/nativephp/create-medication/{id}', function ($id) {
    return view('medications.create', ['patientId' => $id]);
})->name('nativephp.createMedication');

// Print medication action
Route::get('/nativephp/print-medication/{id}', function ($id) {
    $patient = Patient::find($id);
    return "Printing medications for {$patient->name}";
})->name('nativephp.printMedication');
