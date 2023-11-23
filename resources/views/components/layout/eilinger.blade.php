<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Eilinger Stiftung - @yield('title')</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @vite(['resources/sass/eilinger.scss'])
    @livewireStyles()

</head>

<body>

<!-- ======= Header ======= -->
@include('components.layout.header')


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-2 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"></div>
            <div class="col-lg-8 order-1 order-lg-2 hero-img">
                <img src="{{url('/images/logo_white.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

{{ $slot }}

@if (session()->has('success'))
    <div class="position-absolute top-0 start-100 translate-middle p-3 mb-2 bg-success text-white">
        <p>{{ session('success') }}</p>
    </div>
@endif
<!-- ======= Footer ======= -->
@include('components.layout.footer')

@livewireScripts()
</body>
</html>
