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
<section id="title" class="page-header">
    <div class="container">
        <h1 class="title">Contacto</h1>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li>
                        Contacto</a>
                    </li>
                </ul>
            </div>
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
</section>

<section id="contact-us" class="page-section no-pad light-bg border-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pad-60" data-animation="fadeInLeft">
                <div class="card-container">
                    <div class="card">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="card-title">
                            <h2>Dirección</h2>
                        </div>
                        <div class="card-content">
                            <p>Primavera 237-Int. 1, Jardines de Tuxtla, 29020 Tuxtla Gutiérrez, Chis.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="card-title">
                            <h2>Teléfono</h2>
                        </div>
                        <div class="card-content">
                            <p>961 615 7858</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="card-title">
                            <h2>Email</h2>
                        </div>
                        <div class="card-content">
                            <p>anadic.com.mx</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <p class="form-message" style="display: none;"></p>
                <div class="contact-form">
                    <form action="{{ route('contacto') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduzca su nombre completo" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Introduzca su número telefónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Introduzca su correo electrónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="2" placeholder="Escribe tu mensaje" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-default" type="submit">ENVIAR <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8 pad-30">
                <div class="map-section">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.40163579244!2d-93.15443432484925!3d16.756681884026925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd90e6be7ccdd%3A0x65694e72c25c2dc6!2sPrimavera%20237-Int.%201%2C%20Jardines%20de%20Tuxtla%2C%2029020%20Tuxtla%20Guti%C3%A9rrez%2C%20Chis.!5e0!3m2!1ses-419!2smx!4v1720465252584!5m2!1ses-419!2smx"
                        width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@if (session('success'))
<script>
    swal("¡Listo!", "{{ session('success') }}", 'success', {
        button: "OK",
        timer:5000,
    });
</script>
@elseif(session('error'))
<script>
    swal("Error", "{{ session('error') }}", 'error', {
        button: "OK",
        timer:5000,
    });
</script>
@endif

@endsection
