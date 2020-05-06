@include("layouts.header")




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

                <div class="mm4" style="width:100%;border: 2px solid gray; padding: 6%">


                @csrf
            <div>
                <h1> Erstellen Sie Ihren individuellen Wochenplan</h1>
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
                    <h2 style="margin: 10px"> Portionsgrösse?</h2>

                    <select required style="color: white" class="btn btn-info" name="mealsize" id="mealsize">
                        <option disabled value="" selected="selected">Bedarf</option>
                        <option class="btn-dark" value="klein">klein (330-360g)</option>
                        <option class="btn-dark" value="medium">medium (420-470g)</option>
                        <option class="btn-dark" value="gross">max (520-570g)</option>
                    </select>

                </div>
                <br>
                <br>
                <br>
                <button type="submit" style="text-align: center; color: white;font-weight: bold" class="btn btn-danger" >Weiter</button>

            </div>


{{--                    <img style="width: 400px; height: 150px" src="imagenes/tisch-svg1.PNG">--}}


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
