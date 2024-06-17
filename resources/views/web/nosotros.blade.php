@extends('layouts.web')
@section('main')
<section id="title" class="page-header">
    <div class="container">
        <h1 class="title">¿Quiénes Somos?</h1>

        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li>
                        Quiénes Somos</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- page-header -->
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-md-6 text-justify">
                        {!! $nosotros->introduccion !!}
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/'.$nosotros->imagen) }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="who-we-are" class="page-section no-pad light-bg border-tb">
    <div class="container who-we-are">
        <div class="row">
            <div class="col-md-12 pad-60" data-animation="fadeInLeft">
                <div class="section-title text-left" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">ANADIC CHIAPAS</h2>
                </div>
                <div class="owl-carousel pagination-1 dark-switch" data-pagination="true" data-autoplay="true"
                    data-navigation="false" data-singleitem="true" data-animation="fadeInUp">
                    <div class="item text-center">
                        <h2 class="entry-title">
                            <p>Misión</p>
                        </h2>
                        <div class="entry-content">
                            {!! $nosotros->mision !!}
                        </div>
                    </div>
                    <div class="item text-center">
                        <h2 class="entry-title">
                            <p>Visión</p>
                        </h2>
                        <div class="entry-content">
                            {!! $nosotros->vision !!}
                        </div>
                    </div>
                    <div class="item text-center">
                        <h2 class="entry-title">
                            <p>Valores</p>
                        </h2>
                        <div class="entry-content">
                            <ul>
                                @foreach(explode("\n", $nosotros->valores) as $valor)
                                    <p>{{ trim($valor) }}</p>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection