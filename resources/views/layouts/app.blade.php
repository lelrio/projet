<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <b-navbar-brand href="/">
                    <img src="/images/logo_final.png" id="logo" alt="logo">
                </b-navbar-brand>                
                </button>

                <div class="navigation">
                    <ul class="nav">
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
                            @if(Auth::user()->admin)
                                <li class="nav-item">
                                <a class="nav-link" href="/admin">
                                    Admins
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('products')}}">
                                    Objects
                                </a>
                                </li> 
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('shop') }}">
                                    Shop
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i>Cart</a>
                            </li>   
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('account') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                 
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                            </li>                         
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<style>
#logo{
    height: 100px;
    width: 100px;
}
li a{
      color: black;
  }
@media screen and (max-width: 775px) {
  .navigation {
    margin-right: 50px;
    width: 275px;;
  }
  #logo{
      display: none;
  }
  li a{
      color: black;
  }
}
</style>
</html>
