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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- CSS -->    
    <!-- <link rel="stylesheet" href="app.css"> -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
:root{
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color: #242526;
    --first-color-light: #ffffff;
    --white-color: #F7F6FB;
    --body-font: 'Nunito', sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100}*,::before,::after{box-sizing: border-box}
    body{
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 1rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s}
    a{text-decoration: none}
    .header{
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);transition: .5s
    }
    .header_toggle{
        color: var(--first-color);
        font-size: 1.5rem;
        cursor: pointer
    }
    .header_img{
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden
    }
    .header_img img{
        width: 40px
    }
    .l-navbar{
        position: fixed;
        top: 0;
        left: -30%;
        width: var(--nav-width);
        height: 100vh;
        background-color: #242526;
        padding: .5rem 1rem 0 0;
        transition: .5s;
        z-index: var(--z-fixed)
    }
    .nav{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden
    }
    .nav_logo, .nav_link{
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem
    }
    .nav_logo{
        margin-bottom: 2rem
    }
    .nav_logo-icon{
        font-size: 1.25rem;
        color: var(--white-color)
    }
    .nav_logo-name{
        color: var(--white-color);
        font-weight: 700
    }
    .nav_link{
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s
    }
    .nav_link:hover{
        color: var(--white-color)
    }
    .nav_icon{
        font-size: 1.25rem
    }
    .show{
        left: 0
    }
    .body-pd{
        padding-left: calc(var(--nav-width) + 1rem)
    }
    .active{
        color: var(--white-color)
    }

    .height-100{
        height:100vh
    }
    @media screen and (min-width: 768px)
    {
        body{
            margin: calc(var(--header-height) + 1rem) 0 0 0;
            padding-left: calc(var(--nav-width) + 2rem)
        }
        .header{
            height: calc(var(--header-height) + 1rem);
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }
        .header_img
        {
            width: 40px;height: 40px
        }
        .header_img img{
            width: 45px
        }
        .l-navbar
        {
            left: 0;
            padding: 1rem 1rem 0 0
        }
        .show
        {
            width: calc(var(--nav-width) + 156px)
        }
        .body-pd
        {
            padding-left: calc(var(--nav-width) + 188px)
        }
    }

    </style>
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
                <a href="{{ route('dashboard') }}" class="nav_logo">
                    <img src="colaimo.png" alt="" width="25">
                    <span class="nav_logo-name">COLAIMO</span>
                </a>
                <div class="nav_list">
                    <a href="{{ route('dashboard') }}" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Accueil</span> 
                    </a> 

                    @can('viewany', App\Models\User::class)
                    <a href="{{ route('User.index')}}" class="nav_link"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Utilisateur</span> 
                    </a> 
                    @endcan

                    <a href="{{ route('message.index') }}" class="nav_link"> 
                        <i class='bx bx-message-square-detail '></i> 
                        <span class="nav_name">Messagerie</span> 
                    </a> 

                    
                    @can('viewany',App\Models\parcinfo::class)
                    <a href="{{ route('parcinfo.index') }}" class="nav_link"> 
                        <i class='bx bx-desktop nav_icon'></i> 
                        <span class="nav_name">Parc informatique</span> 
                    </a> 
                    @endcan

                    @can('viewany', App\Models\Stagiaire::class)
                    <a href="{{ route('Stagiaire.index') }}" class="nav_link"> 
                        <i class='bx bxs-graduation nav_icon'></i>
                        <span class="nav_name">Stagiaire</span> 
                    </a> 
                    @endcan

                    @can('viewany', App\Models\TachEffectuee::class)
                    <a href="{{ route('TachEffectuee.index')}}" class="nav_link"> 
                        <i class='bx bx-check-shield nav_icon'></i>
                        <span class="nav_name">Tâches effectuées</span> 
                    </a> 
                    @endcan

                    @can('viewany', App\Models\ChangMat::class)
                    <a href="{{ route('changmat.index') }}" class="nav_link"> 
                        <i class='bx bx-transfer-alt nav_icon'></i>
                        <span class="nav_name">Changement de<br> matériel</span> 
                    </a> 
                    @endcan
                                        
                </div>
            </div> 
            <a href="#" class="nav_link"> 
                    <a href="" class="nav_link"> 
                        <i class='bx bxs-user-circle nav_icon'></i>
                        <span class="nav_name">{{ Auth::user()->name }}</span> 
                    </a> 
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
    <div class="height-100 ">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--Container Main end-->
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
   
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   
    // Your code to run since DOM is loaded and ready
   });
    </script>
</body>
</html>