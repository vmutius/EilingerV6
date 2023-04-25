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
            <li class="nav-item">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" type="button" class="btn btn-light">Log Out</button>
                </form>
            </li>
            <li class="nav-item">
                <span class="mr-2 d-none d-lg-inline text-gray-600">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                <div class="avatar avatar-md">
                    <img src="{{ auth()->user()->avatarUrl() }}" alt="Profile Photo" class="rounded-circle">
                </div>
            </li>
        </ul>
    </div>
    
    

</nav>
