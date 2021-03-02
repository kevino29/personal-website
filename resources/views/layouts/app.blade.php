<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Kevin, Orenday, personal, portfolio, website, resume, goals, contact, skills">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="/assets/images/icons/kevin_icon.ico">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/212d82f631.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="min-vh-100">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand theme-fg" href="{{ url('/') }}">
                    {{ config('app.name', 'Kevin Orenday') }}
                </a>
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="/works" class="nav-link">Works</a>
                        </li>

                        <li class="nav-item">
                            <a href="/skills" class="nav-link">Skills</a>
                        </li>

                        <li class="nav-item">
                            <a href="/resume" class="nav-link">Resume</a>
                        </li>

                        <li class="nav-item">
                            <a href="/contacts" class="nav-link">Contacts</a>
                        </li>

{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                            --}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
                    </ul>
                </div>
            </div>
        </nav>

        @if (session('status'))
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <main>
            @yield('content')
        </main>
    </div>

    <div class="footer justify-content-center theme-bg">
        <div class="xl-font-size text-white text-center pt-5">
            {{ config('app.name') }}
        </div>
        <div class="navbar navbar-expand-sm navbar-light py-5">
            <div class="container">
                <button class="navbar-toggler mx-auto" type="button"
                        data-toggle="collapse" data-target="#navbarFooter"
                        aria-controls="navbarFooter" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarFooter">
                    <ul class="navbar-nav text-center border-bottom border-light mx-auto">
                        <li class="nav-item mx-3">
                            <a class="text-white lg-font-size"
                               href="https://github.com/kevino29" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-white lg-font-size"
                               href="https://www.linkedin.com/in/kevin-orenday-386064195" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-white lg-font-size"
                               href="https://www.instagram.com/kevino_29" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-white lg-font-size"
                               href="https://www.facebook.com/kevin29707" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-white lg-font-size"
                               href="https://twitter.com/KevinBPX_" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center text-white pb-4">
            {{ config('app.name', 'Kevin Orenday') }} &#8226; &copy; NSCC IT Campus
        </div>
    </div>
</body>
</html>
