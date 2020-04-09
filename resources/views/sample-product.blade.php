<?php

$conn = new mysqli("localhost", "root", "", "db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product = str_replace('-',' ',$product);


$result = $conn->query("SELECT name,price,description1,i1,protein,carbs,fett,kalorien FROM produccts where name='$product'");
$row = mysqli_fetch_assoc($result);


session_start();
$_SESSION['price']=$row['price'];
$_SESSION['name']=$row['name'];;
$_SESSION['description1']=$row['description1'];
$_SESSION['i1']=$row['i1'];

$protein=$row['protein'];
$carbs=$row['carbs'];
$kalorien=$row['kalorien'];
$fett=$row['fett'];



?>


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
                </div>
            </div>
        </nav>

        <main class="py-4">
            {{--            @yield('content')--}}
        </main>
    </div>
</header>

<div>

@if(session()->has('notif'))
    <div>
        <strong> Notification </strong>{{session()->get('notif')}}

    </div>
    @endif
</div>

<body style="background-color:#DDFEFE ">


    <main class="container" style="background-color: #DDFEFE; height: 80%;">

        <!-- Left Column / Headphones Image -->
        <!-- Left Column / Headphones Image -->

        <div class="left-column">
            <img src="data:image/jpeg;base64, <?php echo base64_encode($row['i1']); ?>" >
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Muskelaufbau</span>
                <h1><?php echo $_SESSION['name']; ?></h1>
                <p> <?php echo $_SESSION['description1']; ?> </p>
            </div>
        </div>
            <!-- Product Configuration -->
        <br>
        <table style=" display: inline-block; padding: 4px; text-align: center; background-color: white">

            <thead>
{{--            <h2 style="color: seagreen"> {{}} Portion</h2>--}}
            <tr>

                <th>Pro 100g:  &emsp;</th>
                <th>kCal &ensp;</th>
                <th>Eiweiss &ensp; </th>
                <th>Carbs &ensp; </th>
                <th>Fett </th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td>&emsp;</td>
                <td>{{$kalorien}}&ensp;</td>
                <td>{{$protein}}g&ensp;</td>
                <td>{{$carbs}}g&ensp;</td>
                <td>{{$fett}}g</td>



            </tr>
        </table>

    <br> <br>  <br>
        @csrf
            <form class="product-configuration" method="post" action="/sample-product-back">
                @csrf
                <!-- Product Color -->
                    <div class="product-price">
                        <h2 id="priceup" name="priceup"> <?php echo $_SESSION['price']; ?>  CHF / Portion</h2>
                        {{--                <a href="/sample-product-back" class="cart-btn">Add to cart</a>--}}
                    </div>

{{--                    <select hidden id="prodname" name="prodname" type="text">--}}
{{--                        <option selected value="{{$name}}"> </option>--}}

{{--                    </select>--}}

                    <div class="quantity buttons_added">
                        <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" value="1" name="quantity"  title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                    </div>

                <!-- Cable Configuration -->
                <div class="cable-config">
                    <span style="color: black">Gericht: </span> </div>

                    <input type="hidden" value="{{$product}}" name="nameid" id="nameid">

                    <select name="selectsize" id="selectsize">

                        <option class= "button-sizes" name="klein" value="klein" id="klein" >klein</option>
                        <option class= "button-sizes" selected >medium</option>
                        <option class= "button-sizes">gross </option>

                    </select>

                    <button type="submit" href="/sample-product-back" > In Warenkorb </button>

            </form>

            <!-- Product Pricing -->

        <a type="submit" href="/sample-product-back" > Über Alergien etc. hier</a>
    </main>




</body>





<div style="margin: 80px" class="blog-section">

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



<footer style="background-color: lightgray">
    <div class="footer-content container">
        <div class="made-with">With <i class="fa fa-heart"></i> by FitFit</div>
        <ul>
            <li>Follow Me:</li>
            <li><a href="#"><i class="fa fa-globe"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div> <!-- end footer-content -->
</footer>


</body>
</html>

<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css" />
<script src="script.js"></script>

    <script>
        $(document).ready(function() {

            $('.color-choose input').on('click', function() {
                var headphonesColor = $(this).attr('data-image');

                $('.active').removeClass('active');
                $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
                $(this).addClass('active');
            });

        });





        // buttons increment
        function wcqib_refresh_quantity_increments() {
            jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
                var c = jQuery(b);
                c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
            })
        }
        String.prototype.getDecimals || (String.prototype.getDecimals = function() {
            var a = this,
                b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
        }), jQuery(document).ready(function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("updated_wc_div", function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("click", ".plus, .minus", function() {
            // var k= document.getElementById('priceup').innerText;
            // k = k + k;
            // alert(k);
            var a = jQuery(this).closest(".quantity").find(".qty"),
                b = parseFloat(a.val()),
                c = parseFloat(a.attr("max")),
                d = parseFloat(a.attr("min")),
                e = a.attr("step");
            b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
        });


    </script>
