
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


<div>

    <div>
        <h1 style="font-weight: bold"> Vielen Dank f&#252;r Ihren Einkauf! </h1>
    </div>
    <br>

    <h2> Ihre Daten: </h2>

    <br>
    <h3>

        <?php
        $_SESSION['cart']->clear();

        $vorname= $_SESSION['name'];
        $nachname= $_SESSION['nachname'];
        $lieferadresse= $_SESSION['lieferadresse'];
        $stadt= $_SESSION['stadt'];
        $plz= $_SESSION['plz'];
        //        session_start();
        //        $_SESSION["date"] = date('mdYHis', time());
        //        $plz= '8922';
        $email= $_SESSION['email'];
        $handynummer= $_SESSION['handynummer'];

        echo  nl2br ("$vorname \n $nachname \n  $email");

        ?>
    </h3>
<br>

        <div style=" background-color:cornflowerblue; opacity: 0.7">
        <h3>
            <?php
            $dd= (string)$_SESSION['datecode'];
            echo  nl2br ("$lieferadresse \n $stadt,  $plz  \n  Tel.: $handynummer \n ");
            ?>


</h3>
        </div>

        <!---->
    <div style="background-color: white">
        <h3 style="font-size: 12px">Sie werden eine Email mit der Bestellungsnr. + Details erhalten (schauen Sie auch im Spam-Ordner) </h3>
        <br>
        <br>
        <div>

            <h1 style="color: deepskyblue"> ...bis bald!</h1>
        </div>


        <div>
        <img  src="imagenes/face.png">
            <br>
            <br>
    </div>




        <div>
            <a style="text-align: center; color: white; font-weight: bold" class="button1" href="/welcome">Home </a>
            <a style="text-align: center; color: white; font-weight: bold" class="button1" href="/shop-Auswahl">Zurück zum Shop </a>
        </div>

    </div>

</div>

@include('layouts.footer')

</body>
</html>



<br> <br> <br>

