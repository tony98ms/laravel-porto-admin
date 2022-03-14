<!doctype html>
<html class="fixed sidebar-left-collapsed" lang="es">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta name="keywords" content="EPA, EPACORE, EPACOME, EPATEMPLATE" />
    <meta name="description" content="Template con configuraciones basicas para futuros proyectos de la EPA.">
    <meta name="author" content="Tcnlg. Anthony Medina Sandoval">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="{{ asset('image/logo_dv1.png') }}">
    <title>@yield('titulo',config('app.name')) - Inicio</title>
    @include('layouts.partials.styles')
</head>

<body>
    @include('partials.header')
    @include('partials.sidebar')
    {{-- @include('partials.sidebar-right') --}}
    @include('layouts.partials.scripts')
</body>

</html>
