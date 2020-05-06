
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'asd') }}</title>
    <link rel="icon" href="{!! asset('imagenes/facefoody.png') !!}"/>
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


                <a style="position: relative; left: 45%" class="navbar-brand" href="{{ url('/welcome') }}">
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
                                <a class="nav-link" href="/shop">Menu</a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="/overview"> <img style="width: 40px" src="imagenes/carrito.png"> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            {{--            @yield('content')--}}
        </main>
    </div>
</header>







<body>


    <div style="position: relative; display: inline-block">

    <img style="height: 700px;width: 100%;opacity: 0.8" src="imagenes/home-bg.jpg">

{{--        <div class="text-over-image" style="background-color: pink;  padding: 20px; opacity: 0.95; border-radius: 50px">--}}

{{--        <h1 style="color: white; font-weight:bold">--}}
{{--            Chef gekochte, gesunde Gerichte zu Ihnen <br>--}}
{{--               nach Hause geliefert ab 9.90 CHF*--}}
{{--            </h1>--}}


{{--            <h2 style="color: green; background-color:white;font-size: 18px;font-weight:bold; border-radius: 30px">--}}
{{--                goFoody kauft ein, bereitet hoch qualitative und ausgegliechene <br>--}}
{{--                Gerichte vor, kocht, und Liefert zu Ihnen nach Hause.--}}

{{--            </h2>--}}
{{--            <button> hall</button>--}}
{{--        </div>--}}

    </div>




    <p style="color: black" class="section-description text-center">Alle unsere Produkte sind frisch gekocht und ohne Konservanten.</p>

    <br>
    <br><br>
    <br>
    <div style="width: 100%;background: url(imagenes/nubegib.png) no-repeat;background-size: 120%; background-position-x: -150px">

                <h3> Freshn'Foody übernimmt den Einkauf, das Waschen und Vorbereiten, sowie das Kochen und auch die Lieferung zu Ihnen nach Hause.   </h3>
                <h3> Abwechslungsreiche Gerichte in verschieden Portionsgrössen gezielt auf Ihren Ernährungsplan sowie Nähstoff -und Kalorienbedarf </h3>

                <br>
                <br>
                <br>

                <h1>
                Wie funktioniert es?
                </h1>

                <br>
                <br>
                <br>



                    <div>

                        <h2>
                            Sie wählen aus
                        </h2>
                        <img style="width: 200px"  src="imagenes/Neuer Ordner/portatil.png">

                    </div>

        <br>
        <br>




                    <div>
                        <h2>
                            Wir kochen und bereiten alles zu
                        </h2>
                        <img style="margin-left: 15px;width: 200px"  src="imagenes/Neuer Ordner/cazerola.png">
                    </div>

        <br>
        <br>



{{--                    <div>--}}

{{--                        <img style="width: 200px" src="imagenes/Neuer Ordner/flechaabajo.png">--}}
{{--                    </div>--}}

                    <div>
                        <h2>
                            Wir liefern an Ihrem gewünschten Datum
                        </h2>
                        <img style="width: 200px"  src="imagenes/Neuer Ordner/repartidor.png">

                    </div>

                <br>
                <br>


                    <div>
                        <h2>
                            Gerichte bis zu 8 Tage gekühlt haltbar ohne konservierungsstoffe und zusatzstoffe. Aufwärmen und geniessen.
                        </h2>
                        <h2>

                        </h2>
                        <img style="margin-left: 15px;;width: 250px" src="imagenes/Neuer Ordner/micro.png">

                    </div>













<div style="width: 100%;border: 2px solid black; display: block; justify-content: center">


    <div style="margin-left: 30px; margin-right: 30px;">




    <h2>
            Beispiel eines veganes low-fat 5x1 Wochenplan
        </h2>

{{--    <div style="margin-left: 10px;width: 100%;background: url(imagenes/avocado.jpg) no-repeat; background-size: 50%;--}}
{{----}}
{{--    box-shadow: 2px 2px 2px #ccc;--}}
{{--      -moz-box-shadow: 2px 2px 2px #ccc;--}}
{{--      -webkit-box-shadow: 2px 2px 2px #ccc;--}}
{{--      -khtml-box-shadow: 2px 2px 2px #ccc;">--}}

        <br>
        <br>

        <img style="margin-left: 10px;width: 800px;

        ;box-shadow: 2px 2px 2px #ccc;
      -moz-box-shadow: 2px 2px 2px #ccc;
      -webkit-box-shadow: 2px 2px 2px #ccc;
      -khtml-box-shadow: 2px 2px 2px #ccc;" src="imagenes/tisch-svg1.PNG">



    </div>
        <br>
        <br>




</div>


    <div style="margin-left: 30px; margin-right: 30px;">


        <h2>
            5x2 Wochenplan gezielt auf den Muskelaufbau
        </h2>

        <div style="width: 100%;background: url(imagenes/tisch2.png) no-repeat; background-size: 100%; height: 325px;box-shadow: 2px 2px 2px #ccc;
      -moz-box-shadow: 2px 2px 2px #ccc;
      -webkit-box-shadow: 2px 2px 2px #ccc;
      -khtml-box-shadow: 2px 2px 2px #ccc;">

            <br>
            <br>

            <img style="margin-left: 10px;width: 800px;

        ;box-shadow: 2px 2px 2px #ccc;
      -moz-box-shadow: 2px 2px 2px #ccc;
      -webkit-box-shadow: 2px 2px 2px #ccc;
      -khtml-box-shadow: 2px 2px 2px #ccc;" src="imagenes/tisch-svg1.PNG">



        </div>
        <br>
        <br>




    </div>





</div>


    <button class="button1"> Wochenplan erstellen</button>
    <br>
    <br>

    <div>
        <img src="imagenes/carte.PNG">
        <button onclick="window.location.href = '/shop'"> a la carte</button>

    </div>


</div>




<div class="blog-section">

    <div class="container">
        <h1 class="text-center">Wie funktioniert es? </h1>

        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

        <div class="blog-posts">
            <div class="blog-post" id="blog1">
                <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Erfahrungen Sasha...</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog2">
                <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Foto Küche oder mitarb</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog3">
                <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">ärztlich iöbis</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
        </div> <!-- end blog-posts -->
    </div> <!-- end container -->
</div> <!-- end blog-section -->

@include('layouts.footer')


</body>
</html>


