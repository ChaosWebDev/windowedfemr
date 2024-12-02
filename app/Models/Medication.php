<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medication extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'uuid',
        'formulary',
        'brand',
        'display',
        'type',
        'dosage', // per unit dosage (e.g. 1 pill = 25mg even if patient takes 2 pills, it would be 25mg)
        'status',
        'patient_id',
        'rxid',
        'prescriber',
        'instructions',
        'notes',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
