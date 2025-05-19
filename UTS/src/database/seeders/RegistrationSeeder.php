<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Registration;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registration::create([
            'nama_santri' => 'Ahmad Zaki',
            'tanggal_lahir' => '2015-06-01',
            'kelas_sd' => 3,
            'alamat' => 'Jl. Melati No. 15, Bandung',
            'nama_wali' => 'Bapak Zulkifli',
            'no_hp_wali' => '081234567890',
        ]);

        Registration::create([
            'nama_santri' => 'Siti Aisyah',
            'tanggal_lahir' => '2014-09-14',
            'kelas_sd' => 4,
            'alamat' => 'Jl. Anggrek No. 3, Cimahi',
            'nama_wali' => 'Ibu Fatimah',
            'no_hp_wali' => '081298765432',
        ]);

        Registration::create([
            'nama_santri' => 'Muhammad Rizki',
            'tanggal_lahir' => '2016-01-25',
            'kelas_sd' => 2,
            'alamat' => 'Jl. Kenanga No. 10, Lembang',
            'nama_wali' => 'Bapak Ramdan',
            'no_hp_wali' => '081277889900',
        ]);
    }
}
