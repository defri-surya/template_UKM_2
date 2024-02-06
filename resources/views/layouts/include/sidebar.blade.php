<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        @can('isSuperadmin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('fotoslider*') ? 'active' : '' }}" href="{{ route('fotoslider.index') }}">
                    <span class="menu-title">Foto Slider</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profile*') ? 'active' : '' }}" href="{{ route('profile.index') }}">
                    <span class="menu-title">Profile</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('youtube*') ? 'active' : '' }}" href="{{ route('youtube.index') }}">
                    <span class="menu-title">You Tube / Video</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('gallery*') ? 'active' : '' }}" href="{{ route('gallery.index') }}">
                    <span class="menu-title">Gallery</span>
                    <i class="mdi mdi-file-image menu-icon"></i>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('kategori*') ? 'active' : '' }}" href="{{ route('kategori.index') }}">
                    <span class="menu-title">Kategori</span>
                    <i class="mdi mdi-receipt menu-icon"></i>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('media*') ? 'active' : '' }}" href="{{ route('media.index') }}">
                    <span class="menu-title">Sosial Media Link </span>
                    <i class="mdi mdi-receipt menu-icon"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('product*') ? 'active' : '' }}" href="{{ route('product.index') }}">
                    <span class="menu-title">Produk</span>
                    <i class="mdi mdi-receipt menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('link*') ? 'active' : '' }}" href="{{ route('link.index') }}">
                    <span class="menu-title">Link Marketplace</span>
                    <i class="mdi mdi-receipt menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('faq*') ? 'active' : '' }}" href="{{ route('faq.index') }}">
                    <span class="menu-title">FAQ</span>
                    <i class="mdi mdi-receipt menu-icon"></i>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('produkunggulan*') ? 'active' : '' }}"
                    href="{{ route('produkunggulan.index') }}">
                    <span class="menu-title">Order Link</span>
                    <i class="mdi mdi-receipt menu-icon"></i>
                </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('transaksi*') ? 'active' : '' }}"
                    href="{{ route('transaksi.index') }}">
                    <span class="menu-title">Transaksi</span>
                    <i class="mdi mdi-receipt menu-icon"></i>
                </a>
            </li> --}}
        @endcan
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                </div>
                <a class="btn btn-block btn-lg btn-gradient-primary mt-4" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout mr-2"></i>Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <div class="mt-4">
                    <div class="border-bottom">
                    </div>
                </div>
            </span>
        </li>
    </ul>
</nav>
