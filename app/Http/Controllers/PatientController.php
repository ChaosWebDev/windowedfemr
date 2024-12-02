<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function getCurrentPatient(): string
    {
        if (session()->has('patient')) {
            return session()->get('patient');
        } else {
            $request = new Request(['id' => 1]);
            $this->select($request);

            return session()->get('patient') ?? '';
        }
    }

    public function select(Request $request)
    {
        $id = $request->input('id');

        $patient = Patient::where('id', $id)->firstOrFail();

        session()->put('patient', $patient);

        return response()->json([
            'message' => "Patient successfully updated to {$patient->first_name}.",
            "name" => $patient->first_name
        ], 200);
    }
}
