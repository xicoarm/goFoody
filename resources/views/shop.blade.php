
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Freshn'Foody'") }}</title>
    <link rel="icon" href="{!! asset('imagenes/facefoody.png') !!}"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

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
</body>



<form>

        <p style="color: black" class="section-description text-center">Alle unsere Produkte sind frisch gekocht und ohne Konservanten.</p>
        <br>
        <br>

{{--        <div class="mm3">--}}



        <div id="p-flex">


                <?php


                $conn= mysqli_connect("localhost", "root", "", "db");

                    $query = "SELECT * FROM produccts ORDER BY RAND()";



                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result))
                {           $i = 0;
                    $ii=0;
                    $link= str_replace(' ', '-', $row['name']);
                    $_SESSION['i'] = 0;
                    $i=0;
                    $_SESSION['ii'] = 0;
                    echo ('
<div class="p-flex" onclick="shop(this.id)" value="'.$row['name'].'" id="'.$link.'" style="margin-left:  15px; margin-right: 15px;cursor: pointer;border-radius: 12px;">








                         <img class="p-img" style="position: relative;border-radius: 20%; height: 200px; width: 280px ;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 20px 0 rgba(0, 0, 0, 0.49)" src="data:image/jpeg;base64,'.base64_encode($row['i1'] ).'" >


        <div class="p-desc">
            <br>

                        <h2 style="color: black;">'.$row['name'].'</h2>
            <br>

                        <h3> '.$row['preisShopMedium'].' CHF </h3>
            <br>



        </div>






<div id="p-flex" >
<h1 style="font-size: 14px; font-weight: bold;"> 100g: </h1>
<div>


                    <h2 style="font-size: 13px"> kCal</h2>

            <div style="background-color: forestgreen; opacity: 0.7"  class="circle" >



                <div class="tt">'.$row['kalorien'].'</div>





            </div>

        </div>



<div>
                    <h2 style="font-size: 13px"> Eiweiss</h2>

            <div style="background-color: cornflowerblue;opacity: 0.7" class="circle" >



                <div class="tt">'.$row['protein'].'g</div>





            </div>

        </div>


<div>
                    <h2 style="font-size: 13px"> Carbs</h2>

            <div style="background-color: darkorange; opacity: 0.7"  class="circle" >



                <div class="tt">'.$row['carbs'].'g</div>





            </div>

        </div>

<div>
                    <h2 style="font-size: 13px"> Fett</h2>

            <div style="background-color: indianred; opacity: 0.7" class="circle" >



                <div class="tt">'.$row['fett'].'g</div>





            </div>

        </div>







</div>
<br>




  <a href="/shop/'.$link.'" style="width: 40%" class="btn btn-info"> Weiter </a>


<br><br>


</div>



');
                    $i=$i+1;
                }

                ?>

                </div> <!-- end products -->
    </form>



{{--            @elsedesktop--}}




{{--            <form class="featured-section">--}}
{{--                <form class="container">--}}

{{--                    <p style="color: black" class="section-description text-center">Alle unsere Produkte sind frisch gekocht und ohne Konservanten.</p>--}}
{{--                    <br>--}}
{{--                    <br>--}}

{{--                    <div class="mm3">--}}
{{--                        <div class="text-center button-container">--}}

{{--                        </div>--}}


{{--                        <div class="mm3-column">--}}
{{--                            --}}{{--            <div class="product">--}}

{{--                            --}}{{--                <table class="table table-bordered">--}}

{{--                            <?php--}}


{{--                            $conn= mysqli_connect("localhost", "root", "", "db");--}}

{{--                            $query = "SELECT * FROM produccts ORDER BY RAND()";--}}



{{--                            $result = mysqli_query($conn, $query);--}}

{{--                            while($row = mysqli_fetch_array($result))--}}
{{--                            {           $i = 0;--}}
{{--                                $ii=0;--}}
{{--                                $link= str_replace(' ', '-', $row['name']);--}}
{{--                                $_SESSION['i'] = 0;--}}
{{--                                $i=0;--}}
{{--                                $_SESSION['ii'] = 0;--}}
{{--                                echo '--}}
{{--                    <div onclick="shop(this.id)" value="'.$row['name'].'" id="'.$link.'" style=" width: 30% cursor: pointer;border-radius: 12px; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19); min-width: 10%">--}}







{{--               <div class="grid2" style="font-size:25px; font-weight:bold">--}}

{{--                       <div>--}}
{{--                         <img style="border-radius: 50%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 20px 0 rgba(0, 0, 0, 0.49);;" src="data:image/jpeg;base64,'.base64_encode($row['i1'] ).'" height="215" width="250" class="img-thumnail"--}}

{{--                        </div>--}}

{{--                       <div>--}}
{{--                        <h2 style="color: black;">'.$row['name'].'</h2>--}}
{{--                        <h2> '.$row['price'].'.00 CHF </h2>--}}
{{--                        </div>--}}

{{--                </div>--}}


{{--            </div>--}}





{{--            <table style=" display: inline-block; padding: 4px; text-align: center; background-color: whitesmoke">--}}

{{--<thead>--}}
{{--<tr>--}}

{{--<th>Pro 100g: </b> &emsp;</th>--}}
{{--<th>kCal &ensp;</th>--}}
{{--<th>Eiweiss &ensp; </th>--}}
{{--<th>Carbs &ensp; </th>--}}
{{--<th>Fett </th>--}}

{{--</tr>--}}
{{--</thead>--}}

{{--<tbody>--}}
{{--<tr>--}}
{{--                                <td>&emsp;</td>--}}
{{--                            <td>'.$row['kalorien'].'&ensp;</td>--}}
{{--                             <td>'.$row['protein'].'&ensp;&ensp;</td>--}}
{{--                            <td>'.$row['carbs'].'&ensp;</td>--}}
{{--                            <td>'.$row['fett'].'</td>--}}



{{--</tr>--}}
{{--                </table>--}}




{{--            <div>--}}



{{--                        ' ;--}}
{{--//                    $_SESSION['cart']->clear();--}}
{{--                                if($row['description2']!= null){--}}
{{--                                    echo '--}}

{{--                <a type="button" class="button6" > '.$row['description2'].' </a>--}}


{{--            </div>--}}

{{--     ';}--}}

{{--                                echo '<div style="margin:60px">--}}

{{--  <a href="/shop/'.$link.'" class="btn btn-info"> </a>--}}


{{--</div>  </div> ';--}}
{{--                                $i=$i+1;--}}
{{--                            }--}}

{{--                            ?>--}}

{{--                        </div   > <!-- end products -->--}}









{{--            @enddesktop--}}






</html>


    <script type="text/javascript">
        var items = [];



        function addtocart(item) {


            items.push(item);

        }

        {{--            <script>--}}

        function shop(link){
        //
            var str1 = "shop/";
        var str2 = link;
        var res = str1.concat(str2);
        //
              window.location = res;
        //  return false;
        //
        }
        //
        {{--            </script>--}}
    </script>

                <br>
                <br>
                <br>
                <br>
                <br>





@include('layouts.footer')



