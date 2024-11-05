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

    <style>
        .dropdown-item.active{
            background: #a60800;
        }
    </style>


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
                    <img src="{{ asset("/assets/images/logo.svg") }}" alt="epancasila" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mx-auto my-4 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is("/") ? "active" : null }}" aria-current="page" href="{{ route("home") }}">Home</a>
                        </li>
                        <li>
                            <a class="nav-link {{ request()->is("blogs*") ? "active" : null }}" aria-current="page" href="{{ route("blogs") }}">Blogs</a>
                        </li>
                        <li>
                            <a class="nav-link {{ request()->is("leaderboard") ? "active" : null }}" aria-current="page" href="{{ route("leaderboard") }}">Garuda Points</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                          </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item {{ session('locale') == 'en' ? 'active' : '' }}"
                                       href="{{ route('change-language', ['locale' => 'en']) }}">
                                       English
                                       <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/United-kingdom_flag_icon_round.svg/2048px-United-kingdom_flag_icon_round.svg.png"
                                            style="width: 20px; height:20px" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ session('locale') == 'id' ? 'active' : '' }}"
                                       href="{{ route('change-language', ['locale' => 'id']) }}">
                                       Indonesia
                                       <img src="https://www.svgrepo.com/show/242361/indonesia.svg"
                                            style="width: 20px; height:20px" alt="">
                                    </a>
                                </li>
                            </ul>


                        </li>
                    </ul>
                    @if(Auth::check())
                        <b class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer">
                            {{ Auth::user()->name }}
                        </b>
                    @else
                        <a class="tertiary-button text-end" href="{{ route("register") }}">
                            REGISTER
                        </a>
                    @endif
                </div>
            </div>
        </nav>
        <!-- END: NAVBAR -->
        @if (request()->is('/'))
            @include('components.hero-landing')
        @endif
    </header>
    <!-- END::HERO -->

    @if(Auth::check())
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">{{ Auth::user()->name }}</h1>
            <button style="color: white !important; background-color:white;" type="button" class="btn-close text-white " data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-white">
            Your score : {{ Auth::user()->score }} <br>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger mt-3">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endif

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
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
