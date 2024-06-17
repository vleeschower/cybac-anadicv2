<div id="pageloader">
    <div class="loader-item fa fa-spin text-color"></div>
</div>
<div id="top-bar" class="top-bar-section top-bar-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="top-contact link-hover-black">
                    <a href="#">
                        <i class="fa fa-phone"></i>01(961)6112500
                    </a>
                    <a href="#">
                        <i class="fa fa-envelope"></i>contacto@anadicchiapas.com.mx
                    </a>
                </div>
                <div class="top-social-icon icons-hover-black">
                    <a href="https://www.facebook.com/Anadic-Chiapas-361691821041400">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/AnadicChiapas">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="sticker" class="sticky-navigation">
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
                            <a class="navbar-brand" href="{{ route('index') }}">
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
</header>