<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Correo electronico para afiliación</h1>
    <p><strong>Nombre Comercial de la Empresa: </strong>{{ $data['nombre_comercial'] }}</p>
    <p><strong>Razón Social de la Empresa (RFC): </strong>{{ $data['rfc'] }}</p>
    <p><strong>Nombre del Representante Legal: </strong>{{ $data['rlegal'] }}</p>
    <p><strong>Domicilio Comercial: </strong>{{ $data['domicilioEmpresa'] }}</p>
    <p><strong>Colonia: </strong>{{ $data['colonia'] }}</p>
    <p><strong>Ciudad: </strong>{{ $data['ciudad'] }}</p>
    <p><strong>Correo: </strong>{{ $data['correoEmpresa'] }}</p>
    <p><strong>Telefono o Celular: </strong>{{ $data['telefonoEmpresa'] }}</p>
    <p><strong>Página web: </strong>{{ $data['webEmpresa'] }}</p>
    <p><strong>Nombre del Contacto: </strong>{{ $data['nombre_contacto'] }}</p>
    <p><strong>Teléfono o celular del contacto: </strong>{{ $data['tele_contacto'] }}</p>
    <p><strong>Correo del contacto: </strong>{{ $data['correoContacto'] }}</p>
    <p><strong>Comentarios: </strong>{{ $data['coment'] }}</p>
</body>
</html>