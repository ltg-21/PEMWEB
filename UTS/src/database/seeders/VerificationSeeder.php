<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Registration;
use App\Models\Verification;

class VerificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan ada admin dan ada data pendaftaran dulu
        $registrations = Registration::all();

        foreach ($registrations as $registration) {
            Verification::create([
                'registration_id' => $registration->id,
                'status' => collect(['pending', 'diterima', 'ditolak'])->random(),
            ]);
        }
    }
}
