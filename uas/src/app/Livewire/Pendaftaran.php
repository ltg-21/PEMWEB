<?php

namespace App\Livewire;

use Livewire\Component;

class Pendaftaran extends Component
{
    public $nama_santri;
    public $tanggal_lahir;
    public $kelas_sd;
    public $alamat;
    public $nama_wali;
    public $no_hp_wali;

    public function submit()
    {
        $this->validate([
            'nama_santri' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'kelas_sd' => 'required|integer|min:1|max:6',
            'alamat' => 'required|string',
            'nama_wali' => 'required|string',
            'no_hp_wali' => 'required|string',
        ]);

        // Simulasi penyimpanan data (tanpa database)
        session()->flash('success', 'Pendaftaran berhasil dikirim!');

        // Reset form
        $this->reset([
            'nama_santri',
            'tanggal_lahir',
            'kelas_sd',
            'alamat',
            'nama_wali',
            'no_hp_wali',
        ]);
    }

    public function render()
    {
        return view('livewire.pendaftaran');
    }
}