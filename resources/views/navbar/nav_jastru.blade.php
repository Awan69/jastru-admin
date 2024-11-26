@section('nav')
    <div class="footer">
        <a href="{{ route('dashboard_user') }}"
            class="footer-link {{ request()->routeIs('dashboard_user') ? 'active' : '' }}">
            <x-nav-home />
            <span>Beranda</span>
        </a>
        <a href="{{ route('pesan') }}" class="footer-link {{ request()->routeIs('pesan') ? 'active' : '' }}">
            <x-nav-chat />
            <span>Pesan</span>
        </a>
        <a href="/profile_user" class="footer-link footer-link-profile {{ request()->is('profile_user') ? 'active' : '' }}">
            <img src="asset/images/navigasi/profil.png" alt="Profile" class="foto-profil-img">
            <span>Profile</span>
        </a>
        <a href="/pekerjaan" class="footer-link {{ request()->is('pekerjaan') ? 'active' : '' }}">
            <x-nav-job />
            <span>Pekerjaan</span>
        </a>
        <a href="{{ route('setting') }}" class="footer-link {{ request()->routeIs('setting') ? 'active' : '' }}">
            <x-nav-setting />
            <span>Setting</span>
        </a>
    </div>
@endsection
