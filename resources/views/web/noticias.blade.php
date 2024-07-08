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
        <div id="pestañas">
        
         </div>

         <div>
           <img src="{{ asset('img/noticias/image1.jpng') }}" class="img-fluid mb-3">
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

</section>
@endsection