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
                        <p>{!! $nosotros->introduccion !!}</p>
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
                <div class="section-title text-center" data-animation="fadeInUp">
                    <!-- Title -->
                    <h2 class="title">ANADIC CHIAPAS</h2>
                </div>
                <div class="card-container">
                    <div class="card">
                        <div class="icon">
                            <i class="fa fa-flag"></i>
                        </div>
                        <div class="card-title">
                            <h2>Misión</h2>
                        </div>
                        <div class="card-content">
                            <p>{!! $nosotros->mision !!}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="card-title">
                            <h2>Visión</h2>
                        </div>
                        <div class="card-content">
                            <p>{!! $nosotros->vision !!}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fa fa-diamond"></i>
                        </div>
                        <div class="card-title">
                            <h2>Valores</h2>
                        </div>
                        <div class="card-content">
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
