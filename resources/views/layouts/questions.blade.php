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
    <link href="{{ asset('css/questions.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/materialize/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/materialize/icon.css') }}" rel="stylesheet">
</head>
<body class="teal lighten-2">
    <div class="preloader-background">
        <i class="fa fa-spinner fa-pulse fa-spin fa-4x fa-lg" color="#3F729B" aria-hidden="true"></i>
    </div>
     @yield('content')
   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ URL::asset('libraries/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('libraries/materialize/materialize.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script src="{{ URL::asset('js/questions.js') }}"></script>
    <script>
        var flagsUrl = '{{ URL::asset('json/questions.json') }}';
    </script>
</body>
</html>
