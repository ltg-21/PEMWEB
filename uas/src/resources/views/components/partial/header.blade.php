<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- Logo -->
                    <a href="{{ route('home') }}" class="logo">
                        <h1>TPQ Al-Furqan</h1>
                    </a>

                    <!-- Navigasi -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                        <li><a href="{{ route('home') }}#tentang">About Us</a></li>
                        <li><a href="{{ route('pendaftaran') }}" class="{{ request()->routeIs('pendaftaran') ? 'active' : '' }}">Pendaftaran</a></li>
                    </ul>

                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>