<!DOCTYPE html>
<html lang="id">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'SantriDaftar - TPQ Al-Furqan')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Fonts and CSS --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    @livewireStyles
    @stack('styles')
</head>

<body>

    {{-- Header --}}
    @include('components.partial.header')

    {{-- Konten halaman --}}
    {{ $slot }}

    {{-- Footer --}}
    @include('components.partial.footer')

    {{-- JS --}}
    <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('front/assets/js/counter.js') }}"></script>
    <script src="{{ asset('front/assets/js/custom.js') }}"></script>

    @livewireScripts
    @stack('scripts')

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            items: 1,
            dots: true
        });
    });
    
</script>

</body>

</html>