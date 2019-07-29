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
    <link href="{{ asset('css/anniversary.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="{{ asset('libraries/mdb/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/mdb/mdb.min.css') }}" rel="stylesheet">
    
    {{--  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/materialize/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libraries/materialize/icon.css') }}" rel="stylesheet">  --}}
</head>
    <body>
            <div class="preloader-background">
                <i class="fa fa-spinner fa-pulse fa-spin fa-4x fa-lg" color="#3F729B" aria-hidden="true"></i>
            </div>
            
        @yield('content')
    </body>
    <script src="{{ URL::asset('libraries/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/anniversary.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/typed.min.js') }}"></script>
    
</html>