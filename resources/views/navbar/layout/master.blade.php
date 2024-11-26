<body>
    @include('navbar.layout.header')

    @yield('nav')

    @include('navbar.nav_jastru')

    @stack('scripts')
</body>

</html>
