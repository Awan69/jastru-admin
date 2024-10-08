@extends('auth.layout.auth')

@section('title', 'Log in')

@section('content')

    <body>
        <div class="mobile-container">
            <div class="content">
                <h2>Selamat datang di <span>Jastru</span>!</h2>
                <h6>Silahkan gunakan akun anda untuk login</h6>

                <!-- Pesan Error -->
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert"
                        style="border-radius: 30px; font-size: 12px; font-weight: 600; padding: 8px 16px;">
                        Mohon masukkan email & password yang sesuai
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input id="email" name="email" type="email" class="form-control"
                            placeholder="Email atau username" required="required" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input id="password" name="password" type="password" class="form-control"
                                placeholder="Kata sandi" required="required">
                            <span class="input-group-text">
                                <i class="bi bi-eye-slash" id="toggle-password" onclick="togglePassword()"></i>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </form>

                <div class="text-center my-3">atau via sosial media</div>

                <div class="social-login">
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-facebook me-2"></i> Facebook
                    </button>
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-google me-2"></i> Google
                    </button>
                </div>

                <div class="d-flex justify-content-between mt-3" style="width: 100%; max-width: 400px;">
                    <a href="#" class="text-muted">Belum punya akun?</a>
                    <a href="{{ route('password.request') }}" class="text-muted">Lupa password?</a>
                </div>
            </div>

            <div class="text-muted">
                Dengan masuk atau daftar, kamu menyetujui <a href="#">ketentuan layanan</a> & <a
                    href="#">kebijakan
                    privasi</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function togglePassword() {
                var passwordField = document.getElementById("password");
                var toggleIcon = document.getElementById("toggle-password");
                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    toggleIcon.classList.remove("bi-eye-slash");
                    toggleIcon.classList.add("bi-eye");
                } else {
                    passwordField.type = "password";
                    toggleIcon.classList.remove("bi-eye");
                    toggleIcon.classList.add("bi-eye-slash");
                }
            }
        </script>
    </body>

@endsection
