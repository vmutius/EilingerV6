<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('index') }}">Eilinger Stiftung</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link active" href="{{ route('index') }}#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#about">Über uns</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#our-values">Förderbereiche</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#projekte">Projekte</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index') }}#gesuche">Gesuche</a></li>
                @if (Auth::guest())
                  <li><a class="getstarted" href="{{ route('login') }}">Registrieren | Einloggen</a></li>
                @else
                  <li><a class="getstarted" href="{{ route('user_dashboard') }}">Dashboard</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
