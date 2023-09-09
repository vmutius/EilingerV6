<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('index', app()->getLocale()) }}">Eilinger Stiftung</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link active" href="{{ route('index', app()->getLocale()) }}#hero">{{ __('Home') }}</a></li>
              <li><a class="nav-link scrollto" href="{{ route('index', app()->getLocale()) }}#about">{{ __('About Us') }}</a></li>
              <li><a class="nav-link scrollto" href="{{ route('index', app()->getLocale()) }}#our-values">{{ __('Funding Area') }}</a></li>
              <li><a class="nav-link scrollto" href="{{ route('index', app()->getLocale()) }}#projekte">{{ __('Projects') }}</a>
              </li>
              <li><a class="nav-link scrollto" href="{{ route('index', app()->getLocale()) }}#gesuche">Gesuche</a>
              </li>
              @if (Auth::guest())
                  <li><a class="getstarted" href="{{ route('login', app()->getLocale()) }}">Registrieren | Einloggen</a></li>
              @else
                  <li><a class="getstarted" href="{{ route('user_dashboard', app()->getLocale()) }}">Dashboard</a>
                  </li>
              @endif

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ strtoupper(app()->getLocale()) }}
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    @foreach (config('app.languages') as $langLocale => $langName)
                        <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                    @endforeach
                </ul>
            </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
