<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title>Eilinger Stiftung - Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    @vite(['resources/sass/dashboard.scss'])
    @livewireStyles()


<body>
    <!-- ======= Header ======= -->
    @include('layouts.dash-header')

    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Eilinger Stiftung</div>
            <i class="bi bi-list" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('user_dashboard', app()->getLocale()) }}">
                    <i class="bi bi-grid"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{ route('user_antraege', app()->getLocale()) }}">
                    <i class="bi bi-envelope-open"></i>
                    <span class="links_name">Anträge</span>
                </a>
                <span class="tooltip">Stellen Sie hier ihre Anträge</span>
            </li>
            <li>
                <a href="{{ route('user_gesuch', app()->getLocale()) }}">
                    <i class="bi bi-envelope-check"></i>
                    <span class="links_name">Gesuche</span>
                </a>
                <span class="tooltip">Sehen Sie hier ihre Gesuche</span>
            </li>
            <li>
                <a href="{{ route('user_nachrichten', app()->getLocale()) }}">
                    <i class="bi bi-chat-dots"></i>
                    <span class="links_name">Nachrichten</span>
                </a>
                <span class="tooltip">Ihre Nachrichten</span>
            </li>
            <li>
                <a href="{{ route('user_profile.edit', app()->getLocale()) }}">
                    <i class="bi bi-person"></i>
                    <span class="links_name">Profil</span>
                </a>
                <span class="tooltip">Profil</span>
            </li>

            <li>
                <a href="{{ route('user_dateien', app()->getLocale()) }}">
                    <i class="bi bi-folder-plus"></i>
                    <span class="links_name">Datei Ablage</span>
                </a>
                <span class="tooltip">Datei Ablage</span>
            </li>
        </ul>
    </div>

    {{ $slot }}


    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>

    @livewireScripts()

</body>

</html>


</html>
