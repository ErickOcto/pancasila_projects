<html lang="en" data-bs-theme="light">
  <head>
    <meta name="description" content="ruangTenang ai">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Homepage</title>
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


    {{-- JQUERY --}}
    <script src="{{ url("https://code.jquery.com/jquery-3.6.0.min.js") }}"></script>


    <!-- Custom Styling -->
    <link rel="stylesheet" href="{{ asset("/assets/style.css") }}">


    <!-- AOS Library -->
     <link href="{{ url("https://unpkg.com/aos@2.3.1/dist/aos.css") }}" rel="stylesheet">
     <script src="{{ url("https://unpkg.com/aos@2.3.1/dist/aos.js") }}"></script>


     @stack("push_js_before")

     @stack("push_css_before")


  </head>
  <body class="">


    <!-- START::HERO -->
    <header class="header"
    @if(request()->is("/"))
        style="padding-bottom: 100px;"
    @endif
    >
        <!-- START: NAVBAR -->
        <nav class="container navbar navbar-expand-xl navbar-dark">
            <div class="container-fluid">
                <a class="navbar-testimonial" href="{{ route("home") }}">
                    <img src="{{ asset("/assets/images/logo.svg") }}" alt="ruangTenang" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto my-4 my-lg-0">
                        <a class="nav-link {{ request()->is("/") ? "active" : null }}" aria-current="page" href="{{ route("home") }}">Beranda</a>
                    </div>
                    <a class="tertiary-button text-end" href="{{ route("register") }}">
                        REGISTER
                    </a>
                </div>
            </div>
        </nav>
        <!-- END: NAVBAR -->
        @if (request()->is('/'))
            @include('components.hero-landing')
        @endif
    </header>
    <!-- END::HERO -->


    @yield("landing-content")


    @if(!(request()->is('contact')))
    <!-- START::FOOTER -->
    <section class="footer container-fluid pt-48 pb-48" style="margin-top: 100px; border-top: 0.2px solid #ccc;">
      <div class="container">
        <div class="row gap-5 gap-lg-0">
          <div class="col-12 col-lg-3 text-center text-lg-start">
            <a href="{{ route("home") }}">
                <img class="img-fluid" src="{{ asset("/assets/images/logo.svg") }}" alt="logo-footer">
            </a>
          </div>
          <div class="col-12 col-lg-3 text-center text-lg-end">
            <p class="h4 text-white mb-16 "><strong>Pages</strong></p>
            <p><a href="{{ route("home") }}" class="h4 text-gray text-decoration-none mb-16">Home</a></p>
          </div>
          <div class="col-12 col-lg-3 text-center text-lg-end">
            <p class="h4 text-white mb-16 "><strong>Quick Links</strong></p>
            <p><a href="{{ route("home") . '#faq' }}" class="h4 text-gray text-decoration-none">FAQ</a></p>
          </div>
          <div class="col-12 col-lg-3 text-center text-lg-end">
            <p class="h4 text-white mb-16 "><strong>Social </strong></p>

            <p><a href="https://www.instagram.com/epancasila/?utm_source=ig_web_button_share_sheet" class="h4 text-gray text-decoration-none" target="_blank">Instagram</a></p>
          </div>
        </div>
      </div>
      <p class="text-center text-gray h4 mt-5">Copyright @2024 TemanCerita</p>
    </section>
    <!-- END::FOOTER -->
    @endif


    @stack("push_js_after")

    @stack("push_css_after")


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js") }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- AOS LIBRARY -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <script src="{{ url("https://unpkg.com/aos@2.3.1/dist/aos.js") }}"></script>
    <script>
      AOS.init();
    </script>

    <!-- JS Custom -->
     <script src="/assets/index.js"></script>
     <script src="{{ asset("/assets/index.js") }}"></script>
  </body>
</html>
