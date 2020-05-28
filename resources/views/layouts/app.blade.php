<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Bootstrap Java-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    -->
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer ></script>
    
    <!--Bootstrap Jquery-->
    <script src="{{asset('js/bootstrap.js')}}"></script>



    <!--Slick JS-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/11cf76fec7.js" crossorigin="anonymous"></script>

    <!--Slick Slider-->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <!--Nav Bar-->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="span-1">B</span>ook<span class="span-2">S</span>eeker
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                        
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/books">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/bookshops">Bookshops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/libraries">Libraries</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('Login') }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">Reader</a>
                                    <a class="dropdown-item" href="{{ route('bookshop.login') }}">Bookshop</a>
                                    <a class="dropdown-item" href="{{ route('library.login') }}">Library</a>
                                </div>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ __('Register') }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('register') }}">Reader</a>
                                        <a class="dropdown-item" href="{{ route('bookshop.register') }}">Bookshop</a>
                                        <a class="dropdown-item" href="{{ route('library.register') }}">Library</a>
                                    </div>
                                </li>
                            @endif
                        @else
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="/readerdashboard">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>

                            

                        

                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
        <!--/Nav Bar-->
        
         <!--Main Section-->
         <main class="py-4">
            @yield('content')
        </main>
        <!--/Main Section-->

        <!--Footer-->
        <footer>
            <div class="footer text-center">
                <hr>
                <h5 style="color: royalblue;">Bookseeker &copy;</h5>
            </div>
        </footer>  
        <!--/ Footer-->
        
    </div>

    
</body>
</html>
