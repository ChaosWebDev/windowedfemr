<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    public function index()
    {
        if (session()->has('patient')) {
            $patient = session('patient');
        } else {
            $pc = new PatientController();
            $patient = $pc->getCurrentPatient();

            if (empty($patient) || !$patient) {
                $patient = Patient::where('id', 1)->with('medications')->first();
            }
        }

        return view('medications.index', ['patient' => $patient]);
    }

    public function create()
    {
        return response()->json(['message' => "Test Successful."]);
    }

    public function edit(Medication $medication)
    {
        return view('medications.edit', compact('medication'));
    }

    public function update(Request $request, Medication $medication)
    {
        $request->validate([
            'status' => ['required', 'in:active,inactive,on hold,stopped,completed'],
            'formulary' => ['required', 'string'],
            'brand' => ['nullable', 'string'],
            'display' => ['required', 'string', 'max:50'],
            'type' => ['required', 'string', 'max:25'],
            'dosage' => ['required', 'string', 'max:40'],
            'instructions' => ['required', 'string', 'max:255'],
            'prescriber' => ['nullable'],
            'notes' => ['nullable', 'string', 'max:2000']
        ]);

        $medication->update([
            'status' => $request->status,
            'formulary' => $request->formulary,
            'brand' => $request->brand ?? null,
            'display' => $request->display,
            'type' => $request->type,
            'dosage' => $request->dosage,
            'instructions' => $request->instructions,
            'prescriber' => $request->prescriber ?? null,
            'notes' => $request->notes ?? null
        ]);

        return redirect()->route('medication.index');
    }

    public function print()
    {
        return response()->json(['message' => "Test Successful."]);
    }
}
