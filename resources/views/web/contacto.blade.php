@extends('layouts.web')

@section('main')
<header>
    <div class="page-header">
        <div class="container">
            <h1 class="title">Contacto</h1>
        </div>
        
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href=".">Inicio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                </ol>
              </nav>
        </div>
        
    </div>
</header>

<section id="contact-info" class="page-section bg-light py-5">
    <div class="container">
        <div class="row text-center gy-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <i class="fa fa-map-marker fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Dirección</h5>
                        <p class="card-text text-center">Primavera 237-Int. 1, Jardines de Tuxtla, 29020 Tuxtla Gutiérrez, Chis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <i class="fa fa-phone fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Teléfono</h5>
                        <p class="card-text text-center">961 615 7858</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <i class="fa fa-envelope fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Email</h5>
                        <p class="card-text text-center">anadic.com.mx</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="map" class="page-section py-5">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112061.09262729759!2d77.208022!3d28.632485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x644e33bc3def0667!2sIndior+Tours+Pvt+Ltd.!5e0!3m2!1sen!2sus!4v1527779731123" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

<section id="contact-form" class="page-section bg-light py-5">
    <div class="container col-lg-8">
        <h2 class="text-center mb-4">Únete</h2>
        <div class="container mt-5">
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                        <strong>{{ $message }}</strong>
                </div>
            @endif

            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible">
                        <strong>{{ $message }}</strong>
                </div>
            @endif

        </div>
        <form action="{{ route('contacto') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduzca su nombre completo">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Introduzca su número telefónico">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Introduzca su correo electrónico">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="5" placeholder="Escribe tu mensaje"></textarea>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">ENVIAR <i class="fa fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</section>


@endsection