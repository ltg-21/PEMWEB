<style>
    .item-1 {
        background-image: url('{{ asset('front/assets/images/banner-item-01.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 600px;
    }

    .item-2 {
        background-image: url('{{ asset('front/assets/images/banner-item-02.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 600px;
    }

    .item-3 {
        background-image: url('{{ asset('front/assets/images/banner-item-03.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 600px;
    }
</style>

<div class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-banner">

                    {{-- Slide 1 --}}
                    <div class="item item-1">
                        <div class="header-text">
                            <span class="category">Pendaftaran Dibuka</span>
                            <h2>Daftarkan Putra-Putri Anda ke TPQ Al-Furqan</h2>
                            <p>Kami membuka pendaftaran santri baru untuk tahun ajaran ini. Mari bersama membentuk generasi Qur’ani.</p>
                            <div class="buttons">
                                <div class="main-button">
                                    <a href="{{ route('pendaftaran') }}">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 2 --}}
                    <div class="item item-2">
                        <div class="header-text">
                            <span class="category">Lingkungan Islami</span>
                            <h2>Belajar Al-Qur’an dengan Metode Menyenangkan</h2>
                            <p>TPQ Al-Furqan memberikan pengalaman belajar yang interaktif dan penuh semangat bersama ustadz dan ustadzah berpengalaman.</p>
                        </div>
                    </div>

                    {{-- Slide 3 --}}
                    <div class="item item-3">
                        <div class="header-text">
                            <span class="category">Bersama Al-Qur'an</span>
                            <h2>Cetak Generasi Cinta Al-Qur’an</h2>
                            <p>Dengan program rutin harian dan tahsin, anak-anak akan lebih dekat dan mencintai Al-Qur’an sejak dini.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>