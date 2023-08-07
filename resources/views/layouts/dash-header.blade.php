<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ms-auto flex-nowrap">
            <li class="nav-item dropdown">
                <button type="button" class="btn btn-dark position-relative dropdown-toggle"  id="dropdownMenuButton" data-bs-toggle="dropdown" >
                    Nachrichten
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      99+
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a> 
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ __('Lang') }}
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  @foreach(config('app.languages') as $langLocale => $langName)
                    <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                  @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <form method="GET" action="{{ route('logout', app()->getLocale()) }}">
                    @csrf
                    <button type="submit" class="btn btn-light">Log Out</button>
                </form>
            </li>
            <li class="nav-item">
                <span class="navbar-text">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
            </li>
        </ul>
    </div>    
</nav>
