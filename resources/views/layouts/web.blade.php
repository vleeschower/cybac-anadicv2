<!DOCTYPE html>
<html lang="es">
<head> 
    
    {{-- bootstrap v5.3 - jsdelivr --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    
	<link rel="stylesheet" href="layerslider/css/layerslider.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,regular,700|Roboto:regular"> 
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="keywords" content="Anadic Chiapas" />
    <meta name="description" content="Nadie es mejor que todos juntos" />
    <meta name="author" content="CYBAC" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{ $title ?? "ANADIC | CHIAPAS" }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" />
    <!-- Font -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic' />
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
    
    <link href='{{ asset('css/font-awesome.min.css') }}' rel='stylesheet' />
    <link href="{{ asset('css/hover-dropdown-menu.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/owl/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/owl/owl.theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/owl/owl.transitions.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/color.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.3.3.min.css') }}">
     <!-- Otros enlaces de CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    </head>
    @yield('css')
</head>
<body>
    <div id="page">
        @include('includes.web_header')
        <div id="main" class="site-content">
            @yield('main')
        @include('includes.web_footer')
        </div>
    </div>
	<!-- Slider HTML markup -->
 
    <!-- External libraries: jQuery & GreenSock -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/bootstrap5.3.3.bundle.min.js') }}"></script>t
    @yield('js')
</body>
</html>