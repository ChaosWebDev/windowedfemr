<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('patients')->insert([
            [
                'uuid' => Str::uuid(),
                'last_name' => 'Gerber',
                'first_name' => 'Jordan',
                'sex' => 'male',
                'dob' => '1986-04-18'
            ],
            [
                'uuid' => Str::uuid(),
                'last_name' => 'Gerber',
                'first_name' => 'Christine',
                'sex' => 'female',
                'dob' => '1988-01-29'
            ],
            [
                'uuid' => Str::uuid(),
                'last_name' => 'Gerber',
                'first_name' => 'Hayden',
                'sex' => 'male',
                'dob' => '2009-08-04'
            ],
            [
                'uuid' => Str::uuid(),
                'last_name' => 'Gerber',
                'first_name' => 'Hailey',
                'sex' => 'female',
                'dob' => '2011-05-13'
            ],
        ]);

        DB::table('medications')->insert([
            [
                'uuid' => Str::uuid(),
                'formulary' => 'Amphet/Dextroamphetamine',
                'brand' => 'Adderall XR',
                'display' => 'Adderall 20mg',
                'type' => 'Capsule',
                'dosage' => '20mg',
                'status' => 'active',
                'patient_id' => 1,
                'rxid' => '2188718',
                'instructions' =>
                "Take 1-2 qAM",
                'notes' => "Do not take more than 60mg per day."
            ],
            [
                'uuid' => Str::uuid(),
                'formulary' => 'Amphet/Dextroamphetamine',
                'brand' => 'Adderall XR',
                'display' => 'Adderall 30mg',
                'type' => 'Capsule',
                'dosage' => '30mg',
                'status' => 'active',
                'patient_id' => 1,
                'rxid' => '2188718',
                'instructions' => "Take 0-1 qAM",
                'notes' => "Do not take more than 60mg per day."
            ]
        ]);
    }
}
