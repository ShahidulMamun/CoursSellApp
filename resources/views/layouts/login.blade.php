<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
</head>
<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
          <!-- particlesjs -->
     <script type="text/javascript" src="{{asset('particlesjs/particles.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('particlesjs/app.js')}}"></script>
    </div>
</body>
</html>
