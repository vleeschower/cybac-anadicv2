@extends('layouts.web')

@section('main')
<header>
    <div class="page-header">
        <div class="container">
            <h1 class="title">Noticias</h1>
        </div>
        
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href=".">Inicio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Noticias</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<section id="notice" class="page-section py-5">
    <div class="container">
        <h1>Noticias</h1>
        <div class="row">
            @foreach ($news as $new)
                <div class="col-md-5 col-lg-3 mb-3">
                    <div class="card h-100">
                        <img src="{{ asset('img/noticias/' . $new->imagen) }}" class="card-img-top" alt="{{ $new->titulo }}">
                        <div class="card-body">
                            <h5 class="title font-weight-bold">{{ $new->titulo }}</h5>
                            <p class="card-text">{{ Str::limit($new->contenido, 150) }}</p>
                            <p class="card-text"><small class="text-muted">Publicado el {{ $new->created_at->format('d M, Y') }}</small></p>
                            <a href="{{ route('noticias.show', $new->id) }}" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection