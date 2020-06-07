<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <?php
    $title = empty($title) ? 'Памятники мраморные, Бетонные, Колодцы' : $title;
    $description = empty($description) ? 'Мы обладаем огромным опытом работы в данной отрасли и в нашем профессиональном подходе Вы можете легко убедиться, посетив нас.Мы изготавливаем памятники из чёрного гранита,,архитектурного бетона,мраморной крошки и песчаника.' : $description;
    ?>


    <title>{{ $title }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="fonts.gstatic.com">
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="monumente, piatra, beton, monumente mramura, fantana, ">
    <meta property="og:locale" content="ro">
    <meta property="og:type" content="product"/>
    <meta property="og:title" content="{{$title}}">
    <meta property="og:description" content="{{$description}}">
    <meta property="og:url" content="http://ritual.md/">
    <meta property="og:site_name" content="Ritual">
    <meta property="og:image" content="http://ritual.md/favicon.png"/>
    <meta itemprop="name" content="{{$title}}">
    <meta itemprop="description" content="{{$description}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{$description}}">
    <meta name="twitter:title" content={{$title}}/>

    <link rel="icon" href="{{ asset('fashiop/img/favicon.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('fashiop/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('fashiop/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('fashiop/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fashiop/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fashiop/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('fashiop/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('fashiop/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('fashiop/vendors/jquery-ui/jquery-ui.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('fashiop/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('fashiop/css/responsive.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Merriweather Sans' rel='stylesheet'>
    <style>
        .body, h1, h2, h3, h4,h5,h6,p{
            font-family: 'Merriweather Sans';
        }
        .robotic{
            font-family: 'Roboto';font-size: 22px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                    <a class="dropdown-item" href="{{  route('logout') }}"
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="{{ asset('fashiop/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('fashiop/js/popper.js')}}"></script>
<script src="{{ asset('fashiop/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('fashiop/js/stellar.js')}}"></script>
<script src="{{ asset('fashiop/vendors/lightbox/simpleLightbox.min.js')}}"></script>
<script src="{{ asset('fashiop/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('fashiop/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('fashiop/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{ asset('fashiop/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('fashiop/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('fashiop/js/mail-script.js')}}"></script>
<script src="{{ asset('fashiop/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ asset('fashiop/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('fashiop/vendors/counter-up/jquery.counterup.js')}}"></script>
<script src="{{ asset('fashiop/js/theme.js')}}"></script>
</html>
