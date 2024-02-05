<!-- Start Header Area -->
<div class="header-area">
    <div class="container">
        <div class="header-wrapper">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <a data-toggle="tooltip" href="{{ route('ukm') }}">
                        @if ($dataProfil->logo === null)
                            <img src="{{ asset('front/noimage.png') }}" alt="" style="max-width: 90px">
                        @else
                            <img src="{{ asset($dataProfil->logo) }}" alt="" style="max-width: 90px">
                        @endif
                    </a>
                </div>
                <div class="col-6 d-lg-none static text-right">
                    <div class="show-mobile-menu"></div>
                </div>
                <div class="col-lg-9 text-right d-none d-lg-block">
                    <nav class="menu-wrapper">
                        <ul class="main-menu" id="mobile-menu">
                            <li class="{{ Request::is('/*') ? 'active' : '' }}">
                                <a href="{{ route('ukm') }}">Home</a>
                            </li>
                            <li class="{{ Request::is('profil*') ? 'active' : '' }}">
                                <a href="{{ route('profil') }}">Profile</a>
                            </li>
                            <li class="{{ Request::is('katalogproduk*') ? 'active' : '' }}">
                                <a href="{{ route('katalogproduk') }}">Produk</a>
                            </li>
                            <li class="{{ Request::is('gallery*') ? 'active' : '' }}">
                                <a href="{{ route('gallery') }}">Gallery</a>
                            </li>
                            {{-- <li class="{{ Request::is('/#contact*') ? 'active' : '' }}">
                                <a href="#contact-us">Contact</a>
                            </li> --}}
                            {{-- <li class="{{ Request::is('/#contact*') ? 'active' : '' }}">
                                <a href="{{ route('login') }}">Login</a>
                            </li> --}}
                            {{-- <li
                                class="search-trigger d-none d-lg-inline-block {{ Request::is('listkeranjangbelanja*') ? 'active' : '' }}">
                                <a href="{{ route('listkeranjangbelanja') }}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->
