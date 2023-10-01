<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">



    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])



    <style type="text/css">

        i{

            font-size: 50px;

        }

    </style>

</head>

<body>

<div class="container-fluid">
    <div class="row flex-nowrap">
        @include('blocks.sidebar')
        <div class="col py-3">
            @include('blocks.sidebar')
            @yield('page-content')
        </div>
    </div>
</div>
</body>

</html>
