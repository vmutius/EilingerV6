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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/sass/eilinger.scss'])
    @livewireStyles()

    </head>

    <body>

    <!-- ======= Header ======= -->
    @include('components.layouts.header')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-2 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"></div>
          <div class="col-lg-8 order-1 order-lg-2 hero-img">
            <img src="images/logo_white.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    {{ $slot }}

    <!-- ======= Footer ======= -->
    @include('components.layouts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @livewireScripts()
    </body>
</html>