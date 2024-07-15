<header>
    <div id="pageloader">
        <div class="loader-item fa fa-spin text-color"></div>
    </div>

    <div id="top-bar" class="top-bar-section top-bar-bg-color text-white py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-contact link-hover-black">
                        <a href="#">
                            <i class="fa fa-phone"></i> 01(961)6112500
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope"></i> contacto@anadicchiapas.com.mx
                        </a>
                    </div>
                    
                    <div class="top-social-icon d-flex">
                        <a href="https://www.facebook.com/Anadic-Chiapas-361691821041400" class="text-white me-3">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/AnadicChiapas" class="text-white">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
        
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary text-left">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('index') }}">
                <img class="site_logo" alt="Site Logo" width="auto" height="auto" src="{{ asset('img/logob.png') }}" />
            </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- modifificar estrucutra en este espacio de la barra de navegacion principal --}}
        <div class="collapse navbar-collapse nav justify-content-end " id="navbarNavDropdown"  >

            {{-- modificar en style2 y en este espacio diseño de la barra de navegacion principal --}}
            <ul class="nav nav-pills" ">

            <li class="nav-item boton-margen-BarraNav" "> 
                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
            </li>

            <li class="nav-item boton-margen-BarraNav" >
                <a class="nav-link" href="{{ route('quienes_somos') }}">¿Quienes Somos?</a>
            </li>

            <li class="nav-item boton-margen-BarraNav">
                <a class="nav-link" href="{{ route('noticias.index') }}">Noticias</a>
            </li>

            <li class="nav-item boton-margen-BarraNav" ">
                <a class="nav-link" href="{{ route('afiliados') }}">Afiliados</a>
            </li>

            <li class="nav-item boton-margen-BarraNav" ">
                <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
            </li>

            </ul>

        </div>

        </div>
    </nav> 
</header>

  
{{-- <header id="sticker" class="sticky-navigation">
    <div class="sticky-menu relative">
        <div class="navbar navbar-default navbar-bg-light" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span></button>
                            <br>
                            <a class="navbar-brand image-jump" href="{{ route('index') }}">
                                <img class="site_logo" alt="Site Logo" width="190" height="86" src="{{ asset('img/logob.png') }}" />
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="mega-menu">
                                    <a href="{{ route('index') }}">Inicio</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="{{ route('quienes_somos') }}">¿Quiénes Somos?</a>
                                </li>
                                <li>
                                    <a href="{{ route('noticias') }}">Noticias</a>
                                </li>
                                <li>
                                    <a href="{{ route('afiliados') }}">Afiliados</a>
                                </li>
                                <li>
                                    <a href="{{ route('contacto') }}">Contacto</a>
                                </li> 

                                vista de prueba
                                
                                <li>
                                    <a href="{{ ('prueba') }}">Prueba</a>
                                </li>

                            </ul>
                            <div class="bg-white hide-show-content no-display header-contact-content">
                                <p class="vertically-absolute-middle">Call Us
                                    <strong>+0 (123) 456 78 90</strong></p>
                                <button class="close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                            <div class="bg-white hide-show-content no-display header-search-content">
                                <form role="search" class="navbar-form vertically-absolute-middle">
                                    <div class="form-group">
                                        <input type="text" placeholder=" Ingrese su texto y busque aquí" class="form-control"
                                            id="s" name="s" value="" />
                                    </div>
                                </form>
                                <button class="close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                            <div class="bg-white hide-show-content no-display header-share-content">
                                <div class="vertically-absolute-middle social-icon gray-bg icons-circle i-3x">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a></div>
                                <button class="close">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}