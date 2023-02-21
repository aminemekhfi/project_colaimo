<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>COLAIMO</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- CSS -->    
    <link rel="stylesheet" href="app.css">
    <!-- LOGO -->    
    <link rel="shortcut icon" href="colaimo.png" type="image/x-icon">
</head>
<body id="body-pd">
<header class="header" id="header">
        <div class="header_toggle"> 
            <i class='bx bx-menu' id="header-toggle"></i>            
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <img src="colaimo.png" alt="" width="25">
                    <span class="nav_logo-name">COLAIMO</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Accueil</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Utilisateur</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Message</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-desktop nav_icon'></i> 
                        <span class="nav_name">Parc informatique</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bxs-graduation nav_icon'></i>
                        <span class="nav_name">Stagiaire</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-check-shield nav_icon'></i>
                        <span class="nav_name">Tâches effectuées</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-transfer-alt nav_icon'></i>
                        <span class="nav_name">Changement de<br> matériel</span> 
                    </a> 
                    
                </div>
            </div> 
            <a href="#" class="nav_link"> 
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="bx bx-log-out nav_icon" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav_link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bx bx-log-out nav_icon"></i>
                                <span class="nav_name">Déconnexion</span> 
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--Container Main end-->
    <script src="app.js"></script>
</body>
</html>