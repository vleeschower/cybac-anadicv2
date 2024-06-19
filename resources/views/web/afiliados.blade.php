@extends('layouts.web')

@section('main')
<section id="title" class="container-fluid" style="padding: 40px">
    <div class="container" data-animation="fadeInUp">
        <div class="section-title text-center" data-animation="fadeInUp">
            <h3 class="title">DIRECTORIO DE AFILIADOS</h3>
        </div>
        <div class="row">
            @foreach ($afiliados as $item)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-4">
                <a href="{{ $item->web }}" target="_blank" class="zoom-container">
                    <img src="{{ asset('img/afiliados/'.$item->logo) }}">
                    <h3 class="text-center">{{ $item->nombre }}</h3>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

