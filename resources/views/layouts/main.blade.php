<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test-task</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datetimepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css')}}">

</head>

<body>

<header>
    <div class="wrap-menu-outside">
        <div class="container">
            <div class="main-menu-top">
                <div class="row">
                    <div class="col-xl-18">
                        <div class="main-menu-top__left">
                            <ul>
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">Наши цены</a></li>
                                <li><a href="#">Видео курсы</a></li>
                                <li><a href="#">О нас</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="main-menu-top__right">
                            <ul>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="content">
    @yield('content')
</section>


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-24">
                <div class="copy">
                    <p>&copy; 2019 this is a project</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src=" {{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.datetimepicker.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script>

    jQuery(document).ready(function () {
        'use strict';

        jQuery('#filter-date').datetimepicker();
    });
</script>
</body>
</html>