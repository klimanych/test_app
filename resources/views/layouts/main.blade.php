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

</head>
<body>
<div class="container-fluid" id="app">
    <div class="row flex-nowrap">
        @include('blocks.sidebar')
        <div class="col py-3" style="background-color: rgba(242, 246, 250, 1)">
            @include('blocks.navbar')
            <div class="content" style="background-color: rgba(242, 246, 250, 1)">
                @yield('page-content')
            </div>
        </div>
    </div>
</div>


@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@stack('page-setup')
@stack('page-scripts')
</body>
</html>
