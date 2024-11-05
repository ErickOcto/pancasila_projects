<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Lexend Font -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap') }}"
        rel="stylesheet">


    <!-- Poppins Font -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap') }}"
        rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/style.css') }}">
</head>

<body>
    <!-- Medium >> -->
    <section class="login-user d-none d-xl-block">
        <div class="left">
            <img src="{{ asset('/assets/images/yoga-register.png') }}" alt="illus">
        </div>
        <div class="right">
            <form method="POST" action="{{ route('register') }}" class="wrap text-center" style="max-width: 70%;">
                @csrf
                <div class="text-center mb-16">
                    <img src="{{ asset('/assets/images/logo.svg') }}" class="logo" alt="logo">
                </div>
                <div class="wrap mb-16">
                    <h1 class="h2 text-white d-block text-center">
                        Selamat Datang!
                    </h1>
                    <p class="h4 text-white text-center">
                        Silahkan Buat Akun Untuk Lanjut
                    </p>
                </div>

                <div class="text-center mb-32">

                    <div class="wrap-input-login text-start mb-16">
                        <label for="nama">Nama</label>
                        <div class="input-group">
                            <input type="text" id="nama" name="name" placeholder="input nama"
                                autocomplete="off" required>
                            <span class="icon user-icon"></span>
                        </div>
                        @error('name')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="wrap-input-login text-start mb-16">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <input type="email" name="email" id="email" placeholder="input email"
                                autocomplete="off" required>
                            <span class="icon email-icon"></span>
                        </div>
                        @error('email')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="wrap-input-login text-start mb-16">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" placeholder="input password"
                                autocomplete="new-password" required>
                            <span class="icon password-icon"></span>
                        </div>
                        @error('password')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="wrap-input-login text-start mb-16">
                        <label for="password-confirm">Password Confirm</label>
                        <div class="input-group">
                            <input type="password" name="password_confirmation" required id="password-confirm"
                                placeholder="input password" autocomplete="new-password">
                            <span class="icon password-icon"></span>
                        </div>
                        @error('password_confirmation')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="mb-16">
                    <button class="tertiary-button h5 d-block w-100" type="submit">
                        DAFTAR SEKARANG
                    </button>

                    <div class="divider text-white">
                        <span>Atau Masuk Dengan</span>
                    </div>

                    <a class="tertiary-button-border  h5 d-block" href="{{ route('auth.google') }}">
                        GOOGLE
                    </a>
                </div>

                <p class="h6 text-white">Sudah punya akun? <a href="{{ route('login') }}"
                        class=" text-white"><strong>Masuk disini</strong></a></p>
            </form>
        </div>
    </section>

    <!-- << Small -->
    <section class="login-user d-xl-none">
        <div class="mobile py-5">
            <div class="wrap text-center" style="max-width: 100%;">
                <div class="text-center mb-16">
                    <img src="{{ asset('/assets/images/logo.svg') }}" class="logo" alt="logo">
                </div>
                <div class="wrap mb-16">
                    <h1 class="h2 text-white d-block text-center">
                        Selamat Datang!
                    </h1>
                    <p class="h4 text-white text-center">
                        Silahkan Buat Akun Untuk Lanjut
                    </p>
                </div>

                <div class="text-center mb-32">

                    <div class="wrap-input-login text-start mb-16">
                        <label for="nama-mobile">Nama</label>
                        <div class="input-group">
                            <input type="text" id="nama-mobile" placeholder="input nama" autocomplete="off"
                                name="name" required>
                            <span class="icon user-icon"></span>
                        </div>
                        @error('name')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="wrap-input-login text-start mb-16">
                        <label for="email-mobile">Email</label>
                        <div class="input-group">
                            <input type="email" id="email-mobile" placeholder="input email" autocomplete="off"
                                name="email" required>
                            <span class="icon email-icon"></span>
                        </div>
                        @error('email')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="wrap-input-login text-start mb-16">
                        <label for="password-mobile">Password</label>
                        <div class="input-group">
                            <input type="password" id="password-mobile" placeholder="input password"
                                autocomplete="new-password" name="password" required>
                            <span class="icon password-icon"></span>
                        </div>
                        @error('password')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="wrap-input-login text-start mb-16">
                        <label for="password-mobile-confirmation">Password Confirm</label>
                        <div class="input-group">
                            <input type="password" id="password-mobile-confirmation" placeholder="input password"
                                autocomplete="new-password" name="password_confirmation" required>
                            <span class="icon password-icon"></span>
                        </div>
                        @error('password_confirmation')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="mb-16">
                    <button class="tertiary-button h5 d-block border-0 w-100" type="submit">
                        DAFTAR SEKARANG
                    </button>

                    <div class="divider text-white">
                        <span>Atau Masuk Dengan</span>
                    </div>

                    <a class="tertiary-button-border h5 d-block" href="{{ route('auth.google') }}">
                        GOOGLE
                    </a>
                </div>

                <p class="h6 text-white">Sudah punya akun? <a href="{{ route('login') }}"
                        class=" text-white"><strong>Masuk disini</strong></a></p>
            </div>
        </div>
    </section>


    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
