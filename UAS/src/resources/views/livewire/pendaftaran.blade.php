<div class="section" id="pendaftaran">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 text-center">
                <h2>Formulir Pendaftaran Santri Baru</h2>
                <p>Isi dengan lengkap dan benar untuk proses pendaftaran ke TPQ Al-Furqan.</p>
            </div>

            <div class="col-lg-8 offset-lg-2">
                <div class="contact-us-content">
                    <form wire:submit.prevent="submit">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <div class="mb-3">
                            <input type="text" wire:model="nama_santri" placeholder="Nama Lengkap Santri" class="form-control">
                            @error('nama_santri') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <input type="date" wire:model="tanggal_lahir" class="form-control">
                            @error('tanggal_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <input type="number" wire:model="kelas_sd" placeholder="Kelas SD (1–6)" class="form-control" min="1" max="6">
                            @error('kelas_sd') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <textarea wire:model="alamat" placeholder="Alamat Lengkap" class="form-control"></textarea>
                            @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" wire:model="nama_wali" placeholder="Nama Wali" class="form-control">
                            @error('nama_wali') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" wire:model="no_hp_wali" placeholder="No. HP Wali" class="form-control">
                            @error('no_hp_wali') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5 py-2">Kirim Pendaftaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>