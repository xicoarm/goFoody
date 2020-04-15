<?php


$conn = new mysqli("localhost", "root", "", "db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product = str_replace('-',' ',$product);


if(isset($_SESSION['addedtocart'])){
    $val= $_SESSION['addedtocart'];
    $_SESSION['addedtocart']="no";
    }
    else{
        $val="no";
        }




$result = $conn->query("SELECT name,preisShopKlein, gewichtKlein,gewichtGross,gewichtMedium,preisShopMedium, preisShopGross, description1,i1,protein,carbs,fett,kalorien FROM produccts where name='$product'");
$row = mysqli_fetch_assoc($result);



//$_SESSION['price']=$row['price'];
$_SESSION['name']=$row['name'];;
$_SESSION['description1']=$row['description1'];
$_SESSION['i1']=$row['i1'];
$_SESSION['preisShopKlein']=$row['preisShopKlein'];
$_SESSION['preisShopMedium']=$row['preisShopMedium'];
$_SESSION['preisShopGross']=$row['preisShopGross'];
$_SESSION['gewichtKlein']=$row['gewichtKlein'];
$_SESSION['gewichtGross']=$row['gewichtGross'];
$_SESSION['gewichtMedium']=$row['gewichtMedium'];

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

<body>@include('layouts.header')
<h4>@include('flash::message')

<div class="mm3">



</div>

<body>


    <main class="container" style="height: 80%;">

        <!-- Left Column / Headphones Image -->
        <!-- Left Column / Headphones Image -->

        <div class="left-column">
            <img style="width: 30%;border-radius: 30%;box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 10px 15px 0 rgba(0, 0, 0, 0.49);;"src="data:image/jpeg;base64, <?php echo base64_encode($row['i1']); ?>" >
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

    <br> <br>
        @csrf
            <form class="product-configuration" method="post" action="/sample-product-back">
                @csrf
                <!-- Product Color -->


                    <select style="visibility: hidden" class="btn btn-outline-primary" onchange="abc('{{$_SESSION['name']}}', this.value)" name="selectsize" id="selectsize">
{{--                        <option disabled value="" selected="selected">Wählen Sie</option>--}}
                        <option class= "button-sizes" name="klein" value="klein" id="klein" >klein ({{$_SESSION['gewichtKlein']}}g)</option>
                        <option class= "button-sizes" value="medium" name="medium" id="medium" selected >medium ({{$_SESSION['gewichtMedium']}}g)</option>
                        <option class= "button-sizes" value="gross" name="gross" id="gross" >gross ({{$_SESSION['gewichtGross']}}g) </option>

                    </select>

                    <br>



                    <br>

                    <div class="product-price">
                        <h2 id="priceup" name="priceup"> <?php echo $_SESSION['preisShopMedium']; ?>  CHF / Portion</h2>
                        {{--                <a href="/sample-product-back" class="cart-btn">Add to cart</a>--}}
                    </div>

                    <br>

{{--                    <select hidden id="prodname" name="prodname" type="text">--}}
{{--                        <option selected value="{{$name}}"> </option>--}}

{{--                    </select>--}}

                    <div class="quantity buttons_added demo-desc">
                        <input type="button" value="-" class="minus">
                        <input type="number" step="1" min="1" max="" value="1" name="quantity"  title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                        <input type="button" value="+" class="plus">
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                <!-- Cable Configuration -->
                <div class="cable-config">


                    <input type="hidden" value="{{$product}}" name="nameid" id="nameid">


                    <button id="warenkorb" value="{{$val}}" name="warenkorb" class=" btn btn-success" type="submit" href="/sample-product-back" > In Warenkorb </button>
                </div>
            </form>
        <br>
        <br>
        <br>
        <br>
        <br>

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




@include('layouts.footer')


</body>
</html>

<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css" />
<script src="script.js"></script>

    <script>



        $(document).ready(function() {

            if(document.getElementsByName('warenkorb')[0].value == "added"){
                // alert("1");

                document.getElementsByName('carrito')[0].src = "/imagenes/carro1.png";

            }

            document.getElementById("selectsize").style.visibility = "visible";
            // document.getElementById("selectsize2").style.visibility = "hidden";

        });

        function abc(meal, size) {


            products = [
                "Pouletbrust mit Basmatireis und Gemüse",
                "Hühnerbrust begleitet von Reis zur sowie von einer Gemüsemischung (Brokkoli, grüne Bohnen, Karotten und rote Paprika).",

                "11.90", //preis für klein shop 12.20
                "14.90", //preis für mid shop 13.70
                "17.80", //preis für gross shop 18.90

                "10.90", //preis für klein PLAN 11.00
                "13.90", //presi med PLAN   14.00
                "16.80",   // p gross PLAN     17.00

                //klein-mid-g gramm
                "350",   // p gross PLAN     17.00
                "450",   // p gross PLAN     17.00
                "550",   // p gross PLAN     17.00

                //nährwerte pro 100g
                "106.4",// kCal,
                "16", //Carbs,
                "8.2", //Eiweiss,
                "0.9", // Fett",

                "Rinderfiletstreifen mit Penne und Gemüse",
                "Rindfleisch mager geschnetzelt begleitet von Penne und einer Portion unserer Gemüsemischung, bestehend aus Brokkoli, grünen Bohnen, Karotten und rotem Pfeffer.",

                "13.90", //preis für klein shop 12.20
                "16.90", //preis für mid shop 13.70
                "19.80", //preis für gross shop 18.90

                "13.00", //preis für klein PLAN 11.00
                "16.00", //presi med PLAN   14.00
                "18.90",   // p gross PLAN     17.00

                "330",   // gewicht kelin
                "420",   // gewicht medium
                "520",   // gewicht gross


                //nährwerte pro 100g
                "188",// kCal, /
                "17,8", //Carbs,
                "13.3 ", //Eiweiss,
                "2.8", // Fett",

                "Norwegischer Lachs mit Kartofferln und Gemüse",
                "Lachs norwegischen Ursprungs, begleitet von Bratkartoffeln sowie einem Teil unserer Gemüsemischung, bestehend aus Brokkoli, grünen Bohnen, Karotten und rotem Pfeffer.",

                "14.90", //preis für klein shop 12.20
                "15.90", //preis für mid shop 13.70
                "20.80", //preis für gross shop 18.90

                "14.00", //preis für klein PLAN 11.00
                "17.00", //presi med PLAN   14.00
                "19.90",   // p gross PLAN     17.00

                "330",   // gewicht kelin
                "420",   // gewicht medium
                "520",   // gewicht gross


                //nährwerte pro 100g
                "128",// kCal, / 52,5  47
                "7.8", //Carbs,  5
                "8.9 ", //Eiweiss, 7.4   1
                "2.4", // Fett",  2.5  3

                "Bestehend aus 40% Lachs, 40% Kartoffeln und 20% Gemüse"


            ];

            for (index = 0; index < products.length; ++index) {


                if (products[index] == meal) {

                    if(size=="klein") {

                        // document.getElementById('priceup').innerText = products[index+3];
                        document.getElementById('priceup').innerHTML = products[index+2]+" CHF / Portion";
                        document.getElementById('priceup').innerText = products[index+2]+" CHF / Portion";


                    }
                    if(size=="medium") {

                        // document.getElementById('priceup').innerText = products[index+3];
                        document.getElementById('priceup').innerHTML = products[index+3]+" CHF / Portion";

                    }
                    if(size=="gross") {

                        // document.getElementById('priceup').innerText = products[index+3];
                        document.getElementById('priceup').innerHTML = products[index+4]+" CHF / Portion";

                    }

                }

            }
        }



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
            {{--if(--}}
            {{--<?php--}}
            {{--echo ;--}}
            {{--?>)--}}

            var a = jQuery(this).closest(".quantity").find(".qty"),
                b = parseFloat(a.val()),
                c = parseFloat(a.attr("max")),
                d = parseFloat(a.attr("min")),
                e = a.attr("step");
            b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
        });


    </script>
