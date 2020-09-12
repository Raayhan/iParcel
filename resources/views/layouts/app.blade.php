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
                        @guest
                            <li class="nav-item">
                              <a class="nav-link" href="/services">{{ __('Services') }}</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/about">{{ __('About') }}</a>
                            </li>
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
           <div class="container-fluid text-center text-md-left">
  
                    <!-- Grid row -->
                    <div class="row">
                
                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">
                
                        <!-- Content -->
                        <img style="max-width:30%" src="{{asset('img/logo-white.png')}}" alt="">
                        <p>Office Address : 73, Shantinagor,Dhaka 1217.</p>
                        <p><i class="fas fa-phone-alt"></i> +88 01717272999</p>
                
                        </div>
                        <!-- Grid column -->
                
                        <hr class="clearfix w-100 d-md-none pb-3">
                
                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">
                
                        <!-- Links -->
                        <h5 class="text-uppercase">Links</h5>
                
                        <ul class="list-unstyled">
                            <li>
                            <a href="#!">Link 1</a>
                            </li>
                            <li>
                            <a href="#!">Link 2</a>
                            </li>
                            <li>
                            <a href="#!">Link 3</a>
                            </li>
                            <li>
                            <a href="#!">Link 4</a>
                            </li>
                        </ul>
                
                        </div>
                        <!-- Grid column -->
                
                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">
                
                        <!-- Links -->
                        <h5 class="text-uppercase">Links</h5>
                
                        <ul class="list-unstyled">
                            <li>
                            <a href="#!">Link 1</a>
                            </li>
                            <li>
                            <a href="#!">Link 2</a>
                            </li>
                            <li>
                            <a href="#!">Link 3</a>
                            </li>
                            <li>
                            <a href="#!">Link 4</a>
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
