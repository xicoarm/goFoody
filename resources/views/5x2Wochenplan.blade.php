
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





{{--<div class="container">--}}

    <form method="post" action="overview">
@csrf<h1 style="color: lightblue" class="text"> Erstellen Sie Ihren Wochenplan </h1>
<br>
{{--        <div class="boxed" style="background-color: slategray; border: 1px solid white;">--}}





        <h3 class="textm1" style="color: darkgreen"> Tag 1 </h3>

        <div class="mm4" style="">




            <div class="mm4-column">
            <select required name="m1"id="m1" onchange="picturemChickenm2('textm1', 'imgm1','m1','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                <option disabled value="" selected="selected">Gericht 1</option>



            <?php

                $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

            </select>

                <div>
                <img id="imgm1" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                 <div    class="textm1">

                        <div>
                    <h3 id="textm1" style="display: initial" class="textm1" > </h3>
                         </div>
                 </div>



            </div>



            <div class="mm4-column">
            <select required name="a1" id="a1" onchange="picturemChickenm2('texta1', 'imga1','a1','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                <option disabled value="" selected="selected">Gericht 2</option>

            <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</option>
                '; }?>
            </select>

            <div class="im2">
                <img class='im2' id="imga1" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%" /> </div>

            <div class="texta1">
                <h3 id="texta1" style="display: initial" class="textm1" > </h3> </div>
            {{--        //tag1--}}
            </div>
        </div>


        <hr>

        <h3 class="textm1" style="color: darkgreen"> Tag 2 </h3>

        <div class="mm4" style="">




            <div class="mm4-column">
                <select required name="m2"id="m2" onchange="picturemChickenm2('textm2', 'imgm2','m2','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 1</option>




                <?php

                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

                </select>

                <div>
                    <img id="imgm2" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                <div    class="textm1">

                    <div>
                        <h3 id="textm2" style="display: initial" class="textm1" > </h3>
                    </div>
                </div>



            </div>



            <div class="mm4-column">
                <select  required name="a2" id="a2" onchange="picturemChickenm2('texta2', 'imga2','a2','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 2</option>

                <?php
                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</option>
                '; }?>
                </select>

                <div class="im2">
                    <img class='im2' id="imga2" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%" /> </div>

                <div class="texta1">
                    <h3 id="texta2" style="display: initial" class="textm1" > </h3> </div>
                {{--        //tag1--}}
            </div>
        </div>

        <hr>

        <h3 class="textm1" style="color: darkgreen"> Tag 3 </h3>

        <div class="mm4" style="">




            <div class="mm4-column">
                <select required name="m3"id="m3" onchange="picturemChickenm2('textm3', 'imgm3','m3','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 1</option>




                <?php

                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

                </select>

                <div>
                    <img id="imgm3" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                <div    class="textm1">

                    <div>
                        <h3 id="textm3" style="display: initial" class="textm1" > </h3>
                    </div>
                </div>



            </div>



            <div class="mm4-column">
                <select  required name="a3" id="a3" onchange="picturemChickenm2('texta3', 'imga3','a3','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 2</option>

                <?php
                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</option>
                '; }?>
                </select>

                <div class="im2">
                    <img class='im2' id="imga3" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%" /> </div>

                <div class="texta1">
                    <h3 id="texta3" style="display: initial" class="textm1" > </h3> </div>
                {{--        //tag1--}}
            </div>
        </div>




        <hr>

        <h3 class="textm1" style="color: darkgreen"> Tag 4 </h3>

        <div class="mm4" style="">




            <div class="mm4-column">
                <select  required name="m4"id="m4" onchange="picturemChickenm2('textm4', 'imgm4','m4','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 1</option>




                <?php

                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

                </select>

                <div>
                    <img id="imgm4" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                <div    class="textm1">

                    <div>
                        <h3 id="textm4" style="display: initial" class="textm1" > </h3>
                    </div>
                </div>



            </div>



            <div class="mm4-column">
                <select required  name="a4" id="a4" onchange="picturemChickenm2('texta4', 'imga4','a4','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 2</option>

                <?php
                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</option>
                '; }?>
                </select>

                <div class="im2">
                    <img class='im2' id="imga4" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%" /> </div>

                <div class="texta1">
                    <h3 id="texta4" style="display: initial" class="textm1" > </h3> </div>
                {{--        //tag1--}}
            </div>
        </div>



        <hr>

        <h3 class="textm1" style="color: darkgreen"> Tag 5 </h3>


        <div class="mm4" style="">




            <div class="mm4-column">
                <select required name="m5"id="m5" onchange="picturemChickenm2('textm5', 'imgm5','m5','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 1</option>




                <?php

                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

                </select>

                <div>
                    <img id="imgm5" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                <div    class="textm1">

                    <div>
                        <h3 id="textm5" style="display: initial" class="textm1" > </h3>
                    </div>
                </div>



            </div>



            <div class="mm4-column">
                <select required name="a5" id="a5" onchange="picturemChickenm2('texta5', 'imga5','a5','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 2</option>

                <?php
                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</option>
                '; }?>
                </select>

                <div class="im2">
                    <img class='im2' id="imga5" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%" /> </div>

                <div class="texta1">
                    <h3 id="texta5" style="display: initial" class="textm1" > </h3> </div>
                {{--        //tag1--}}
            </div>

        </div>

        <div>
            <button id="zurkasse5x2" type="submit" class="btn btn-danger" style="margin-left: 45%"> Zur Kasse </button>

        </div>
    </form>






</body>
</html>



<script type="text/javascript">


    function picturemChickenm2(textid, imageid, sectionid, mealsize) {

        products = ["Chicken mit Reis", "Pro 480g: kCal 652, Carbs 73g, Eiweiss 37g, Fett 24g", "price", "description1",
            "Paella Marisco", "Pro 480g: kCal 622, Carbs 72g, Eiweiss 32g, Fett 22g", "Paella mit Fish und ....",
            "Wurst mit Champignons und Vegetables", "Pro 480g: kCal 632, Carbs 73g, Eiweiss 33g, Fett 23g", "description1",


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


        ];


        var pic = "imagenes\\" + document.getElementById(sectionid).value + ".png";
        document.getElementById(imageid).src = pic.replace();
        document.getElementById(imageid).style.display = 'block';

        for (index = 0; index < products.length; ++index) {

            if (mealsize == "klein") {

                var st= "Portion: "+ products[index + 8 ]+"g, " + "kCal: " + ((products[index + 8 ]/100) *products[index + 11 ]).toFixed(1)+ ", " + "Carbs: " +((products[index + 8]/100) * products[index + 12 ]).toFixed(1) + "g, "
                    + "Eiweiss : " +((products[index + 8 ]/100) * products[index + 13 ]).toFixed(1)+"g, " + "Fett: " + ((products[index + 8 ]/100) *products[index + 14 ]).toFixed(1)+"g";

                if (products[index] == document.getElementById(sectionid).value) {

                    document.getElementById(textid).innerText = st.toString();


                }
            }

            if (mealsize == "medium") {


                var st= "Portion: "+ products[index + 9 ]+"g, " + "kCal: " + ((products[index + 9 ]/100) *products[index + 11 ]).toFixed(1)+ ", " + "Carbs: " +((products[index + 9]/100) * products[index + 12 ]).toFixed(1) + "g, "
                    + "Eiweiss : " +((products[index + 9 ]/100) * products[index + 13 ]).toFixed(1)+"g, " + "Fett: " + ((products[index + 9 ]/100) *products[index + 14 ]).toFixed(1)+"g";

                if (products[index] == document.getElementById(sectionid).value) {

                    document.getElementById(textid).innerText = st.toString();

                    // document.getElementById(textid).innerText = (products[index + 6]).toString();
                    // document.getElementById(text).style.display = 'initial';
                    // document.getElementById(textid).style.border.co;
                }
            }


            if (mealsize == "gross") {

                var st= "Portion: "+ products[index + 10 ]+"g, " + "kCal: " + ((products[index + 10 ]/100) *products[index + 11 ]).toFixed(1)+ ", " + "Carbs: " +((products[index + 10]/100) * products[index + 12 ]).toFixed(1) + "g, "
                    + "Eiweiss : " +((products[index + 10 ]/100) * products[index + 13 ]).toFixed(1)+"g, " + "Fett: " + ((products[index + 10 ]/100) *products[index + 14 ]).toFixed(1)+"g";

                if (products[index] == document.getElementById(sectionid).value) {

                    document.getElementById(textid).innerText = st.toString();

                    // document.getElementById(textid).innerText = (products[index + 6]).toString();
                    // document.getElementById(text).style.display = 'initial';
                    // document.getElementById(textid).style.border.co;
                }
            }


        }
    }


    //
    // function picturemChickenm3(sectionid, wheretodisplay, mealsize) {
    //
    //     products = ["Chicken mit Reis", "Pro 480g: kCal 652, Carbs 73g, Eiweiss 37g, Fett 24g", "price", "description1",
    //         "Paella Marisco", "Pro 480g: kCal 622, Carbs 72g, Eiweiss 32g, Fett 22g", "Paella mit Fish und ....",
    //         "Wurst mit Champignons und Vegetables", "Pro 480g: kCal 632, Carbs 73g, Eiweiss 33g, Fett 23g", "description1",
    //
    //
    //         "Pouletbrust mit Basmatireis und Gemüse",
    //         "Hühnerbrust begleitet von Reis zur sowie von einer Gemüsemischung (Brokkoli, grüne Bohnen, Karotten und rote Paprika).",
    //
    //         "11.90", //preis für klein shop 12.20
    //         "14.90", //preis für mid shop 13.70
    //         "17.80", //preis für gross shop 18.90
    //
    //         "10.90", //preis für klein PLAN 11.00
    //         "13.90", //presi med PLAN   14.00
    //         "16.80",   // p gross PLAN     17.00
    //
    //         //klein-mid-g gramm
    //         "350",   // p gross PLAN     17.00
    //         "450",   // p gross PLAN     17.00
    //         "550",   // p gross PLAN     17.00
    //
    //         //nährwerte pro 100g
    //         "106.4",// kCal,
    //         "16", //Carbs,
    //         "8.2", //Eiweiss,
    //         "0.9", // Fett",
    //
    //
    //
    //
    //
    //     ];
    //
    //     alert("hhhh");
    //     for (index = 0; index < products.length; ++index) {
    //         if (products[index] == document.getElementById(sectionid).value) {
    //
    //
    //                 if (mealsize == "klein") {
    //                     document.getElementById(wheretodisplay).innerText = (products[index + 5]).toString();
    //                 }
    //                 if (mealsize == "medium") {
    //                     document.getElementById(wheretodisplay).innerText = (products[index + 6]).toString();
    //                 }
    //                 if (mealsize == "gross") {
    //                     document.getElementById(wheretodisplay).innerText = (products[index + 7]).toString();
    //                 }
    //
    //             // document.getElementById(text).style.display = 'initial';
    //             // document.getElementById(textid).style.border.co;
    //         }
    //     }
    // }
</script>





