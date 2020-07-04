<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('fontawesome-5.13.1-web/css/all.min.css') }}" rel="stylesheet">

    <!-- MDB 5 UI Kits -->
    <link href="{{ asset('MDB-UI-KIT-Free-1.0.0-alpha1/css/mdb.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('boot5/js/bootstrap.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('boot5/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Laravel CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- My Custom CSS -->
    <link href="{{ asset('css/imu.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="itopbar">
        <div class="itopright isocial">
            <a class="" href="#"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
            <a class="" href="#"><i class="fab fa-linkedin-in white-text mr-4"> </i></a>
            <a class="" href="#"><i class="fab fa-instagram white-text mr-4"> </i></a>
            <a class="" href="#"><i class="fab fa-twitter white-text mr-4"> </i></a>
        </div>
        <a class="ileftSide">
            <a class="ioffer" href="#">Get 20% off with coupon code</a>
        </a>
        <a class="icenterSide">
            <a class="ioffer">FREE SHIPPING AND RETURNS WITHIN DHAKA CITY</a>
        </a>
    </nav>

    <div id="app">

        <nav class="inavbar navbar sticky-top navbar-expand-md navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    {{ config('app.name', 'CMS') }}
                </a>

                {{-- <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('/storage/logo/shophunters.png') }}" height="28" alt="CoolBrand">
                </a> --}}

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Start Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>
                    </ul>
                    <!-- End Left Side Of Navbar -->

                    <!-- Start Right Side Of Navbar -->
                    <ul class="navbar-nav">

                        <!-- Start Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard')}}">
                                        Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <!-- End Authentication Links -->
                    </ul>
                    <!-- End Right Side Of Navbar -->
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- <!-- -------------------------Footer Section ------------------------------------------------- -->
    <footer class="ifootbackground ifootbackground page-footer font-small unique-color-dark">
        <!-- Copyright -->
        <div class="ifooter3 footer-copyright text-center py-3">© 2020 Copyright:
          <a href="https://imrulhasan.me/"> www.imrulhasan.me</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-------------------------------------------- End Footer Section---------------------------------> --}}
</body>
</html>
