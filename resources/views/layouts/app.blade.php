<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'iParcel') }} | @yield('pagetitle')</title>
    <link rel="icon" href="{{ asset('img/icon.png')}}" type="image/x-icon">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <script
    src="https://kit.fontawesome.com/753fbd11bf.js"
    crossorigin="anonymous"
  ></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/"><img class="navbar-brand" src="{{ asset('img/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                            <li class="nav-item">
                              <a class="nav-link" href="/services">{{ __('Services') }}</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/about">{{ __('About') }}</a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->
       <footer class="page-footer font-small mdb-color pt-4">

         <!-- Footer Links -->
           <div class="container-fluid text-center text-md-left" style="padding-bottom:5%!important;">
  
                    <!-- Grid row -->
                    <div class="row">
                
                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">
                
                        <!-- Content -->
                        <img style="max-width:30%;margin-bottom:4%" src="{{asset('img/logo-white.png')}}" alt="">
                        <ul class="list-unstyled text-small">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>&nbsp; 73, Shantinagor,Dhaka 1217
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>&nbsp; contact@iparcel.rf.gd
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>&nbsp; +88 0171-7272999
                            </li>
                            
                        </ul>
                        
                
                        </div>
                        <!-- Grid column -->
                
                        <hr class="clearfix w-100 d-md-none pb-3">
                
                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">
                
                        <!-- Links -->
                        <h4 style="margin-bottom:12%">Links</h4>
                
                        <ul class="list-unstyled">
                           
                            <li>
                              <a href="/services">Services</a>
                            </li>
                            <li>
                              <a href="/about">About</a>
                            </li>
                            @guest
                            <li>
                              <a href="/login">Login</a>
                            </li>
                            <li>
                              <a href="/register">Register</a>
                            </li>
                           @endguest
                            
                        </ul>
                
                        </div>
                        <!-- Grid column -->
                
                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">
                
                        <!-- Links -->
                        <h4 style="margin-bottom:12%">Social</h4>
                
                        <ul class="list-unstyled">
                            <li>
                            <a href="#!"><i class="fab fa-facebook"></i>&nbsp; facebook</a>
                            </li>
                            <li>
                            <a href="#!"><i class="fab fa-twitter"></i>&nbsp; twitter</a>
                            </li>
                            <li>
                            <a href="#!"><i class="fab fa-instagram"></i>&nbsp; instagram</a>
                            </li>
                            <li>
                            <a href="#!"><i class="fab fa-youtube"></i>&nbsp; YouTube</a>
                            </li>
                        </ul>
                
                        </div>
                        <!-- Grid column -->
                
                    </div>
                    <!-- Grid row -->
  
                </div>
                <!-- Footer Links -->
            
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Developed & Maintained by:
                <a href="https://raayhan.github.io/" target="_blank">Rayhan Ahmed Rakib </a>
                </div>
                <!-- Copyright -->
            
            </footer>
            <!-- Footer -->
    </div>
</body>
</html>
