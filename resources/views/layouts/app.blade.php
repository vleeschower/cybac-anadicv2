<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('admin/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/all.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/components.css') }}">
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/scripts.js') }}"></script>
    <script src="{{ asset('admin/custom.js') }}"></script>
</body>

</html>
