<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ER shop</title>

        <!-- Favicon -->
        <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries  {{ asset('frontend/') }}  -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('frontend/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/lib/slick/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

                
        @include('frontend.partials.topbar')

        
        @include('frontend.partials.navbar')

        
        @include('frontend.partials.bottombar')

  

         @yield('content')


        @include('frontend.partials.footer')

          
        @include('frontend.partials.footerbottom')

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/slick/slick.min.js') }}"></script>
        
        <!-- Main Javascript -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>
