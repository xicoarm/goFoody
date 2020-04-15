
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'asd') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<header>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">


                <a style="position: relative; left: 46%" class="navbar-brand" href="{{ url('/welcome') }}">
                    <img style="width: 150px" src="/imagenes/logogofoody.png">
                    {{--                    {{ config('app.name', 'asd') }}--}}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <ul class="navbar-nav mr-auto">
                            <!-- Authentication Links -->

                            <li class="nav-item">
                                <a class="nav-link" href="/welcome">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/shop-Auswahl">Wochenpläne</a>
                            </li>
                        </ul>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="/overview"> <img style="width: 40px" src="imagenes/carrito.png"> </a>
                    </li>
                </div>
            </div>
        </nav>

        <main class="py-4">
            {{--            @yield('content')--}}
        </main>
    </div>
</header>





{{--<body style="background-color:grey;">--}}
{{--<header>--}}
{{--    <div class="top-nav container">--}}
{{--        <div class="logo">FitFit</div>--}}

{{--        @if (Route::has('login'))--}}
{{--            <div class="top-right links">--}}
{{--                @auth--}}
{{--                    <a href="{{ url('/welcome') }}">Mein Profil</a>--}}
{{--                    <a href="{{ url('/logout') }}">Logout</a>--}}

{{--                @else--}}
{{--                    <a href="{{ route('login') }}">Login</a>--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <a href="{{ route('register') }}">Register</a>--}}
{{--                    @endif--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        @endif--}}


{{--        <ul>--}}
{{--            <li><a href="/welcome">Home</a></li>--}}
{{--            <li><a href="/5x2Wochenplan">Wochenplan</a></li>--}}
{{--            <li><a href="#">Blog</a></li>--}}
{{--            <li><a href="#">Cart</a></li>--}}
{{--        </ul>--}}
{{--    </div> <!-- end top-nav -->--}}




{{--</header>--}}























{{--        <body style="background-color:grey;">--}}

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <div>


            <form action="/Wochenplan" method="post">
                @csrf
            <div style="border: 2px solid gray; padding: 6%">
                <h1> Erstellen Sie Ihren persönlichen Wochenplan</h1>
                <br>
                <h2 style="margin: 10px"> Mahlzeiten an einem Tag?</h2>
            <br>


                <select required style="color: white;" class="btn btn-info" name="mealsxday" id="mealsxday">
                    <option disabled value="" selected="selected">Gerichte</option>
                    <option class="btn-dark" value="1">1</option>
                    <option class="btn-dark" value="2">2</option>
                    <option class="btn-dark" value="3">3</option>
                </select>


{{--                <a style="text-align: center; color: white;font-weight: bold" href="{{ url('/5-Tage-Plan-3-Gerichte-am-Tag') }}" class="btn btn-info" >4</a>--}}
{{--                    <a style="text-align: center; color: white;font-weight: bold" href="{{ url('/5-Tage-Plan-3-Gerichte-am-Tag') }}" class="btn btn-info" >5</a>--}}

                <div>
                    <br>
                    <h2 style="margin: 10px"> Portion grösse?</h2>
                    <select required style="color: white" class="btn btn-info" name="mealsize" id="mealsize">
                        <option disabled value="" selected="selected">Bedarf</option>
                        <option class="btn-dark" value="klein">klein</option>
                        <option class="btn-dark" value="medium">medium</option>
                        <option class="btn-dark" value="gross">gross</option>
                    </select>
                </div>
                <br>
                <br>
                <br>
                <button type="submit" style="text-align: center; color: white;font-weight: bold" class="btn btn-danger" >Weiter</button>

            </div>
            </form>
        </div>





        <div>


            <div style="border: 2px solid gray; padding: 6%; margin-top: 2%;">

            <h1>Essen Sie À la Carte</h1>

                <a style="text-align: center; color: white;font-weight: bold;" href="{{ url('/shop') }}" class="btn btn-danger" >Zum Shop</a>
            </div>


        </div>


<br><br><br>



@include('layouts.footer')


</body>
</html>









<script>
    // Add active class to the current button (highlight it)
    function choice(id) {

        document.getElementById(id).classList.add('info-active');

        // document.getElementById(id).classList.remove('MyClass');
        // document.getElementById(id).className("info-active");

    }

    function choicedark(id) {

        document.getElementById(id).classList.add('info-active-dark');

        // document.getElementById(id).classList.remove('MyClass');
        // document.getElementById(id).className("info-active");

    }
</script>
