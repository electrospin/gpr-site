<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            @extends('layouts.app')
            @section('content')
                <h1>Home</h1>
                <p>Underground infrastructure supports main civil services that
                    are critical to daily human living, which include water supply,
                    waste and storm water sewage, natural gas, electric, steam and
                    telecommunications. Real-time and automated sensing and mapping
                    of undergraduate infrastructure are essential for maintainability
                    and serviceability of our civil infrastructure in current urban
                    living.This project proposes an innovative research approach to
                    monitor and map underground infrastructure by integrating
                    gigabit network-enabled sensing and mapping technology, cutting
                    edge networking, and data analytics. The success of the project
                    will reduce redundant digging operations, accidental interruptions
                    of service, and accidents that harm public safety and environment,
                    such as erosion and explosion. This is a collaborative research
                    project between the University of Vermont and
                    the University of Tennessee at Chattanooga. The cities of
                    Burlington, VT, Winooski, VT and Chattanooga, TN are providing
                    access to their infrastructure facilities for testing,
                    evaluation and improvement of techniques. A notable feature is
                    that all three cities have widespread deployments of gigabit
                    networks that are available for use on this project. The three
                    participating cities are located in small metropolitan regions
                    that ease implementation of research efforts, yet big enough to
                    elucidate key issues affecting scaling up to larger cities.
                    This project also provides educational experiences for graduate
                    students and participating municipal utility officials in gigabit
                    network-enabled sensing and underground urban infrastructure. </p>
                @endsection
{{--            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>--}}
        </div>
    </body>
</html>
