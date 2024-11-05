<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Lexend Font -->
    <link rel="preconnect" href="{{ url("https://fonts.googleapis.com") }}">
    <link rel="preconnect" href="{{ url("https://fonts.gstatic.com") }}" crossorigin>
    <link href="{{ url("https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap") }}" rel="stylesheet">


    <!-- Poppins Font -->
    <link rel="preconnect" href="{{ url("https://fonts.googleapis.com") }}">
    <link rel="preconnect" href="{{ url("https://fonts.gstatic.com") }}" crossorigin>
    <link href="{{ url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap") }}" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="{{ url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css") }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("/assets/style.css") }}">
  </head>
  <body>
    <!-- Medium >> -->
    <section class="login-user d-none d-lg-block">
        <div class="left">
            <img src="{{ asset("/assets/images/yoga-login.png") }}" alt="illus">
        </div>
        <div class="right">
            <form method="POST" action="{{ route('login') }}" class="wrap text-center" style="max-width: 70%;">
            @csrf
                <div class="text-center mb-24">
                    <img src="{{ asset("/assets/images/logo.svg") }}" class="logo" alt="logo">
                </div>
                <div class="wrap mb-48">
                    <h1 class="h2 text-white d-block text-center">
                        Selamat Datang!
                    </h1>
                    <p class="h4 text-white text-center">
                        Masuk Ke Akun Anda
                    </p>
                </div>

                {{-- @if (session('status'))
                    <div class="text-white my-4 h3">
                        {{ session('status') }}Tes
                    </div>
                @endif --}}


                <div class="text-center mb-48">

                    <div class="wrap-input-login text-start mb-24">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <input type="email" name="email" id="email" placeholder="input email" autocomplete="off" required>
                            <span class="icon email-icon"></span>
                        </div>
                        @error('email')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="wrap-input-login text-start mb-24">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" id="password" placeholder="input password"
                            name="password" autocomplete="new-password" required>
                            <span class="icon password-icon"></span>
                        </div>
                        @error('password')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    @if (Route::has('password.request'))
                        <a class="text-white h6" href="{{ route('password.request') }}">
                            <strong>Lupa Akun</strong>
                        </a>
                    @endif

                </div>

                <div class="mb-24">
                    <button class="tertiary-button h5 w-100 border-0" type="submit">
                        MASUK KE AKUN
                    </button>

                    <div class="divider text-white">
                        <span>Atau Masuk Dengan</span>
                    </div>

                    <a class="tertiary-button-border h5 d-block" href="{{ route("auth.google") }}">
                        GOOGLE
                    </a>
                </div>

                <p class="h6 text-white">Belum punya akun? <a href="{{ route("register") }}" class=" text-white"><strong>Daftar disini</strong></a></p>
            </form>
        </div>
    </section>

    <!-- << Small -->
    <section class="login-user d-lg-none">
        <div class="mobile">
            <form method="POST" action="{{ route('login') }}" class="wrap text-center my-5">
                @csrf
                <div class="text-center mb-24">
                    <img src="{{ asset("/assets/images/logo.svg") }}" class="logo" alt="logo">
                </div>
                <div class="wrap mb-24">
                    <h1 class="h2 text-white d-block text-center">
                        Selamat Datang!
                    </h1>
                    <p class="h4 text-white text-center">
                        Masuk Kembali Ke Akun Anda
                    </p>
                </div>

                {{-- @if (session('status'))
                    <div class="text-white my-4 h3">
                        {{ session('status') }}
                    </div>
                @endif --}}

                <div class="text-center mb-48">

                    <div class="wrap-input-login text-start mb-24">
                        <label for="email-mobile">Email</label>
                        <div class="input-group">
                            <input type="email" name="email" id="email-mobile" placeholder="input email" autocomplete="off" required>
                            <span class="icon email-icon"></span>
                        </div>
                        @error('email')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="wrap-input-login text-start mb-24">
                        <label for="password-mobile">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password-mobile" placeholder="input password" autocomplete="new-password" required>
                            <span class="icon password-icon"></span>
                        </div>
                        @error('password')
                            <div class="text-red mt-1 h5">{{ $message }}</div>
                        @enderror
                    </div>

                    @if (Route::has('password.request'))
                        <a class="text-white h6" href="{{ route('password.request') }}">
                            <strong>Lupa Akun</strong>
                        </a>
                    @endif

                </div>

                <div class="mb-24">
                    <button class="tertiary-button h5 w-100 border-0" type="submit">
                        MASUK KE AKUN
                    </button>

                    <div class="divider text-white">
                        <span>Atau Masuk Dengan</span>
                    </div>

                    <a class="tertiary-button-border text-white h5 d-block" href="{{ route('auth.google') }}">
                        GOOGLE
                    </a>
                </div>

                <p class="h6 text-white">Belum punya akun? <a href="{{ route("register") }}" class=" text-white"><strong>Daftar disini</strong></a></p>
            </form>
        </div>
    </section>


    <script src="{{ url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js") }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
