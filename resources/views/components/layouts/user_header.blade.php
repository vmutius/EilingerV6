<nav class="navbar">

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}<</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <form wire:submit.prevent="logout">
                        @crsf
                        <input type="submit" value="Logout">
                    </form>
                </a>
            </li>
        </ul>
    </div>
</nav><!-- .navbar -->
