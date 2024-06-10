@extends('layouts.web')

@section('main') 
<div id="slider" style="width:100%;height:600px;margin:0 auto;margin-bottom: 0px;">
    @foreach ($slider as $item) {
        @if($item->tipo == "Imagen"){?>
            <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
                <img src="{{ asset('img/slider/'.$item->imagen) }}" class="ls-bg" alt="" />
                <img src="{{ asset('img/slider/'.$item->imagen) }}" class="ls-tn" alt="Slide thumbnail">
            </div>
        @else
            <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; transition2d:104; kenburnsscale:1.00;">                
                @php
                    $image = pathinfo($item->imagen);
                @endphp
                <div class="ls-l" data-ls="backgroundvideo:false;autoplay:true;controls:false;showinfo:false;poster:https://img.youtube.com/vi/<?=$image['filename']?>/hqdefault.jpg;">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $image['filename'] }}?autoplay=1" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        @endif 
    @endforeach
</div>
<section id="additional" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center bottom-xs-pad-30" data-animation="fadeInLeft">
                <img src="{{ asset('images/'.$nosotros->imagen) }}" width="280" height="440" alt="" />
            </div>
            <div class="col-md-8" data-animation="fadeInRight">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <h2 class="title">Bienvenidos</h2>
                </div>
                <div data-animation="fadeInUp">
                   {!! $nosotros->introduccion !!}
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section id="who-we-are" class="page-section no-pad light-bg border-tb">
    <div class="container who-we-are">
        <div class="row">
            <div class="col-md-12 pad-60" data-animation="fadeInLeft">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">ANADIC NOTICIAS</h2>
                </div>
                <div class="col-md-12" style="margin-top:5%;">
                    <div class="row-md-3 col-sm-4">
                        <div class="box">
                            <div class="frame">
                                <a href="noticia.php?not=5">
                                    <img src="img/noticias/thumbs/5c05c8de15a34.PNG" alt="img" class="img-responsive">
                                </a>
                            </div>
                            <div class="text-box">
                                <div class="tp-row">
                                    <em> Cuarto Poder</em>
                                    <span class="date">2018-12-04</span>
                                </div>
                                <div class="inner">
                                    <h4>
                                        <a href="noticia.php?not=5">
                                            Designan a Octavio Cortázar como dirigente de la Anadic </a>
                                    </h4>
                                    <p>Miembros de la Asociación Nacional de Distribuidores de Tecnología Informática y
                                        Comunicaciones
                                        (Anadic), Capítulo Chiapas, eligieron a Octavio Cortázar, como su nuevo
                                        presidente de este
                                        organismo empresarial en... </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-md-3 col-sm-4">
                        <div class="box">
                            <div class="frame">
                                <a href="noticia.php?not=4">
                                    <img src="img/noticias/thumbs/5c05c80fbd8fe.PNG" alt="img" class="img-responsive">
                                </a>
                            </div>
                            <div class="text-box">
                                <div class="tp-row">
                                    <em> CYBAC</em>
                                    <span class="date">2018-12-04</span>
                                </div>
                                <div class="inner">
                                    <h4>
                                        <a href="noticia.php?not=4">
                                            Anadic de México, encara una nueva era </a>
                                    </h4>
                                    <p>Con base en el trabajo de comisiones específicas, la nueva organización busca
                                        evitar errores del
                                        pasado, ser más incluyente y orientarse hacia las tendencias que rigen al
                                        sector. Nueva
                                        formación Con la... </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-md-3 col-sm-4">
                        <div class="box">
                            <div class="frame">
                                <a href="noticia.php?not=7">
                                    <img src="img/noticias/thumbs/5f21f4c45104b.49.46 AM.PNG" alt="img"
                                        class="img-responsive">
                                </a>
                            </div>
                            <div class="text-box">
                                <div class="tp-row">
                                    <em> CYBAC</em>
                                    <span class="date">2020-07-29</span>
                                </div>
                                <div class="inner">
                                    <h4>
                                        <a href="noticia.php?not=7">
                                            1er Congreso Virtual </a>
                                    </h4>
                                    <p>Anadic&nbsp;México convoca al&nbsp;“Primer Congreso Virtual Anadic Mx 2020”, que
                                        se llevará a cabo del 20 al 22 de octubre del 2020. Evento que se realizará en
                                        formato de “feria” en donde habrá... </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="active"><a>1</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="clients" class="page-section light-bg border-tb tb-pad-20">
    <div class="container" data-animation="fadeInUp">
        <div class="section-title text-center" data-animation="fadeInUp">
            <!-- Heading -->
            <h2 class="title">Nuestros Afiliados</h2>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="owl-carousel navigation-1" data-pagination="false" data-items="6" data-autoplay="true"
                    data-navigation="false">
                    @foreach ($afiliados as $item)
                    <a href="{{ $item->web }}" target="_blank">
                        <img src="{{ asset('img/afiliados/'.$item->logo) }}">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="{{ asset('layerslider/js/greensock.js') }}"></script>
<script src="{{ asset('layerslider/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').layerSlider({
            sliderVersion: '6.0.0',
            responsiveUnder: 0,
            maxRatio: 1,
            slideBGSize: 'auto',
            hideUnder: 0,
            hideOver: 100000,
            skin: 'outline',
            thumbnailNavigation: 'disabled',
            skinsPath: 'layerslider/skins/'
        });
    });
</script>
@endsection