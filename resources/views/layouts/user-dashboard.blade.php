<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title>Eilinger Stiftung - Dashboard</title>

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    @vite(['resources/sass/dashboard.scss'])
    @livewireStyles()


<body>
    <!-- ======= Header ======= -->
    @include('layouts.dash_header')

    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Eilinger Stiftung</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('user_dashboard') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{ route('user_antrag') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Anträge</span>
                </a>
                <span class="tooltip">Stellen Sie hier ihre Anträge</span>
            </li>
            <li>
                <a href="{{ route('user_gesuch') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Gesuche</span>
                </a>
                <span class="tooltip">Sehen Sie hier ihre Gesuche</span>
            </li>
            <li>
                <a href="{{ route('user_nachrichten') }}">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Nachrichten</span>
                </a>
                <span class="tooltip">Ihre Nachrichten</span>
            </li>
            <li>
                <a href="{{ route('user_profile') }}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profil</span>
                </a>
                <span class="tooltip">Profil</span>
            </li>

            <li>
                <a href="{{ route('user_dateien') }}">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Datei Ablage</span>
                </a>
                <span class="tooltip">Datei Ablage</span>
            </li>
            <li>
                <a href="{{ route('user_einstellungen') }}">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Einstellungen</span>
                </a>
                <span class="tooltip">Einstellungen</span>
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
