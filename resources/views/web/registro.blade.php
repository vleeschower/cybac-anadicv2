@extends('layouts.web')
@section('main')
<section id="title" class="page-header">
    <div class="container">
        <h1 class="title">Afiliación</h1>

        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li>
                        Afiliación</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- page-header -->
<section id="page-content" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p>Si usted es persona física con actividad empresarial o persona moral y desea ser
                            parte de Anadic Chiapas, llene este formulario y un consejero se pondrá en contacto
                            con usted a la brevedad.
                            Estamos contentos de que pronto forme parte de esta gran asociación.<br>
                            Los campos con * son necesarios
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="career-form">
                    <form role="form" class="form-box" name="careerform" id="careerform" method="post" action="{{ route('registro2') }}">
                        @csrf
                        <h3 class="title">Datos Generales</h3>
                        <p class="form-message" style="display: none;"></p>
                        <div class="input-text form-group col-md-6">
                            <label for="nombre_comercial">Nombre Comercial de la Empresa *</label>
                            <input id="nombre_comercial" class="input-name form-control" type="text" autofocus
                                name="nombre_comercial" placeholder="Nombre Comercial de la Empresa" required />
                        </div>
                        <div class="input-text form-group col-md-6">
                            <label for="rfc">Razón Social de la Empresa (RFC) *</label>
                            <input id="rfc" class="input-name form-control" type="text" maxlength="15" name="rfc" placeholder="Razón Social de la Empresa" required />
                        </div>
                        <div class="input-text form-group col-md-6">
                            <label for="rlegal">Nombre del Representante Legal *</label>
                            <input id="rlegal" class="input-rlegal form-control" type="text" name="rlegal"
                                placeholder="Nombre del Representante Legal" required />
                        </div>
                        <div class="input-text form-group col-md-6">
                            <label for="domicilioEmpresa">Domicilio Comercial *</label>
                            <input id="domicilioEmpresa" class="input-domicilioEmpresa form-control" type="text" name="domicilioEmpresa" placeholder="Domicilio Comercial" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="colonia" class="sr-only">Colonia</label>
                            <input id="colonia" type="text" class="form-control" name="colonia" placeholder="Colonia" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ciudad" class="sr-only">Ciudad</label><input type="text" class="form-control"
                                name="ciudad" placeholder="Ciudad" />
                        </div>
                        <div class="input-email form-group col-md-6">
                            <label for="correoEmpresa">Correo *</label>
                            <input id="correoEmpresa" class="input-correoEmpresa form-control" type="email"
                                name="correoEmpresa" placeholder="Correo" required />
                        </div>
                        <div class="input-phone form-group col-md-6">
                            <label for="telefonoEmpresa">Telefono o Celular *</label>
                            <input id="telefonoEmpresa" class="input-telefonoEmpresa form-control" type="tel"
                                name="telefonoEmpresa" placeholder="Telefono o Celular" required />
                        </div>
                        <div class="input-email form-group col-md-6">
                            <label for="webEmpresa">Página web</label>
                            <input id="webEmpresa" class="form-control" type="text" name="webEmpresa"
                                placeholder="Website" />
                        </div>
                        <div class="input-text form-group col-md-6">
                            <label for="nombre_contacto">Nombre del Contacto *</label>
                            <input id="nombre_contacto" class="input-name form-control" type="text" name="nombre_contacto" placeholder="Nombre del Contacto" required />
                        </div>
                        <div class="input-phone form-group col-md-6">
                            <label for="tele_contacto">Teléfono o celular del contacto *</label>
                            <input id="tele_contacto" class="input-telefonoEmpresa form-control" type="tel"
                                name="tele_contacto" placeholder="Teléfono o celular del contacto" required/>
                        </div>
                        <div class="input-email form-group col-md-6">
                            <label for="correoContacto">Correo del contacto*</label>
                            <input id="correoContacto" class="input-correoEmpresa form-control" type="email"
                                name="correoContacto" placeholder="Correo" required/>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="coment">Comentarios</label>
                            <textarea id="coment" class="form-control" name="coment" rows="3"
                                cols="30" placeholder="Escribir comentarios..."></textarea>
                        </div>
                        <div class="form-message2"></div>
                        <div class="clearfix"></div>
                        <button class="btn btn-default" type="submit">Registrarme</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@if (session('info'))
<script>
    swal("Mensaje", "{{ session('info') }}", 'success', {
        button: "OK",
        timer:5000,
    });
</script>
@elseif(session('error2'))
<script>
    swal("Error", "{{ session('error2') }}", 'error', {
        button: "OK",
        timer:5000,
    });
</script>
@endif

@endsection