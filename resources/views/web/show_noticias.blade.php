@extends('layouts.web')

@section('main')
<header>
    <div class="page-header">
        <div class="container">
            <h1 class="title">{{ $new->titulo }}</h1>
        </div>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('noticias.index') }}">Noticias</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $new->titulo }}</li>
                </ol>
            </nav>
        </div>
    </div>
</header>

<section id="noticia" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('img/noticias/' . $new->imagen) }}" class="img-fluid" alt="{{ $new->titulo }}">
                <h1>{{ $new->titulo }}</h1>
                <p>{{ $new->contenido }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
