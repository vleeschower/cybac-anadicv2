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


<section id="title" class="page-section">
    <div class="container">
        <h1>Noticias</h1>
        <div class="row">
            @foreach ($news as $new)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/noticias/' . $new->imagen) }}" class="card-img-top" alt="{{ $new->titulo }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $new->titulo }}</h5>
                            <p class="card-text">{{ Str::limit($new->contenido, 150) }}</p>
                            <a href="{{ route('noticias.show', $new->id) }}" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- <section id="title" class="page-section">
    <div class="container">
        <h1>Noticias</h1>
        <div id="pestañas">
        
         </div>

         <div href="{{ route('index') }}">
            <div>
            <img class="site_noticia" alt="noticia" width="auto" height="auto" src="{{ asset('img/noticias/image1.png') }}" />

            </div>


            @foreach ($news as $item )
            <div>
                <img src="{{ asset('img/noticias/'.$item->imagen) }}" class="ls-bg" alt=""/>
            </div>
                
            @endforeach
            
            @foreach ($news as $new)
            <div id="titulo">
                {{ $new -> titulo; }}
                {{ $new -> contenido; }}
            </div>

            <div>

            </div>
            @endforeach
         </div>

    </div>

</section> --}}
@endsection