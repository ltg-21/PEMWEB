<div>
    {{-- Banner --}}
    @include('components.partial.banner')

    {{-- Info Singkat TPQ --}}
    <section class="section" id="about-tpq">
        <div class="container text-center">
            <h2>Selamat Datang di TPQ Al-Furqan</h2>
            <p>TPQ Al-Furqan adalah lembaga pendidikan Al-Qur’an yang berkomitmen membentuk generasi Qur’ani sejak dini.</p>
            <a href="{{ route('pendaftaran') }}" class="btn btn-primary mt-3">Daftar Sekarang</a>
        </div>
    </section>

    {{-- Statistik Singkat (Facts Section) --}}
    @include('components.partial.facts')

    {{-- Testimoni Santri dan Wali --}}
    @include('components.partial.testimonials')

    @include('components.partial.about')

</div>