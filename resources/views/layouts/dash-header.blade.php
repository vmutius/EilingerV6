<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                @livewire('message-notification')

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('Lang') }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        @foreach (config('app.languages') as $langLocale => $langName)
                            <a class="dropdown-item"
                                href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }}
                                ({{ $langName }})
                            </a>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout', app()->getLocale()) }}">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
