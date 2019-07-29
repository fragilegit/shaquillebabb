<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/materialize/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/materialize/icon.css') }}" rel="stylesheet">
</head>
<body>
    {{--  <div class='loader'> 
        <div class='loader-container'>
            <h3><b>Please wait a moment while we are preparing the content !</b></h3>
            <div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
            </div>
        </div>
    </div>    --}}
    <header>
        @include('inc.navbar')
    </header>
    <div id="intro" class="view">
        <div class="full-bg-image">

        </div>
    </div>
    
    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ URL::asset('libraries/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('libraries/materialize/materialize.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>
