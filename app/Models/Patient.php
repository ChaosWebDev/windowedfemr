<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'uuid',
        'last_name',
        'first_name',
        'sex',
        'gender',
        'dob',
    ];

    public function getNameAttribute(): string
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function medications()
    {
        return $this->hasMany(Medication::class);
    }
}
