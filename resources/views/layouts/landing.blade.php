<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LSAPP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css" rel="stylesheet">

</head>
<body>

    <div id="landing">
       
        <main class="py-4">
            
            @include('inc.navbar')
            
            <div class="container-fluid">

               @yield('content')

            </div>
        
             
        </main>

    </div>

</body>
</html>
