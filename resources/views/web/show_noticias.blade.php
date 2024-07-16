@extends('layouts.web')

@section('main')
<header>
    <div class="page-header bg-light py-3">
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

<section id="title" class="page-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('img/noticias/' . $new->imagen) }}" class="img-fluid mb-4" alt="{{ $new->titulo }}">
                <h2 class="font-weight-bold mb-3">{{ $new->titulo }}</h2>
                <p class="lead">{{ $new->contenido }}</p>
                <p><small class="text-muted">Publicado el {{ $new->created_at->format('d M, Y') }}</small></p>
                
                <!-- Social Share Buttons -->
                <div class="social-share mt-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('noticias.show', $new->id)) }}" class="btn btn-primary" target="_blank">
                        <i class="fa fa-facebook"></i> Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('noticias.show', $new->id)) }}&text={{ urlencode($new->titulo) }}" class="btn btn-info" target="_blank">
                        <i class="fa fa-twitter"></i> Twitter
                    </a>
                </div>

                <!-- Comments Section (opcional) -->
                {{-- <div class="comments mt-5">
                    <h4>Comentarios</h4>
                    <!-- Formulario de comentarios -->
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="comment">Escribe un comentario:</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    </form>

                    <!-- Lista de comentarios -->
                    <ul class="list-unstyled mt-4">
                        @foreach ($new->comments as $comment)
                        <li class="media mb-3">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">{{ $comment->user->name }}</h5>
                                {{ $comment->content }}
                                <br>
                                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection
