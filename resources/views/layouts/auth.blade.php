<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
   

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <div class="main">
        

     
            @yield('content')
       
    </div>
    {{-- ... a lot of main HTML code ... --}}

{{-- JS assets at the bottom --}}
    <!-- JS -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

</body>
</html>
