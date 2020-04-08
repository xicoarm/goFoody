<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSS Grid Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


</head>


















</head>



<style>
    html, body {
        padding: 1%;
        /*width: 90%;*/
        max-width: 100%;
        width: 95%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 40' width='80' height='40'%3E%3Cpath fill='%2384ce2b' fill-opacity='0.1' d='M0 40a19.96 19.96 0 0 1 5.9-14.11 20.17 20.17 0 0 1 19.44-5.2A20 20 0 0 1 20.2 40H0zM65.32.75A20.02 20.02 0 0 1 40.8 25.26 20.02 20.02 0 0 1 65.32.76zM.07 0h20.1l-.08.07A20.02 20.02 0 0 1 .75 5.25 20.08 20.08 0 0 1 .07 0zm1.94 40h2.53l4.26-4.24v-9.78A17.96 17.96 0 0 0 2 40zm5.38 0h9.8a17.98 17.98 0 0 0 6.67-16.42L7.4 40zm3.43-15.42v9.17l11.62-11.59c-3.97-.5-8.08.3-11.62 2.42zm32.86-.78A18 18 0 0 0 63.85 3.63L43.68 23.8zm7.2-19.17v9.15L62.43 2.22c-3.96-.5-8.05.3-11.57 2.4zm-3.49 2.72c-4.1 4.1-5.81 9.69-5.13 15.03l6.61-6.6V6.02c-.51.41-1 .85-1.48 1.33zM17.18 0H7.42L3.64 3.78A18 18 0 0 0 17.18 0zM2.08 0c-.01.8.04 1.58.14 2.37L4.59 0H2.07z'%3E%3C/path%3E%3C/svg%3E");

        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }


    .position-ref {
        position: absolute;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
        position: absolute;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>












<header style="max-width: 100%">

    <div class="top-nav container">
        <div style="color: black; max-width: 100%" class="logo">FitFit</div>

        <div style="position:relative; right: 10%; max-width: 150%">
            <ul>
                <li><a style="margin: 28px;font-weight: bold; color:black;" href="/welcome">Home</a></li>
                <li><a style="margin: 28px;font-weight: bold; color:black;" href="#">About</a></li>
                <li><a style="margin: 28px;font-weight: bold; color:black;" href="#">Blog</a></li>
                <li><a style="margin: 28px;font-weight: bold; color:black;" href="#">Cart</a></li>
            </ul>
        </div>

    </div> <!-- end top-nav -->

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



{{--</body>--}}

</html>






















{{--        <body style="background-color:grey;">--}}

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <div class="mm" style="max-width: 80%; margin-left: 10%; min-width: 60%">

            <div class="boxed" style="margin-left: 18%;">
                <h1> Erstellen Sie Ihren persönlichen Wochenplan</h1>
                <h2 style="margin: 10px"> Mahlzeiten an einem Tag?</h2>

                <a style="text-align: center; color: white;font-weight: bold" href="{{ url('/5x2Wochenplan') }}" class="button1" >2</a>
                <a style="text-align: center; color: white;font-weight: bold" href="{{ url('/5-Tage-Plan-3-Gerichte-am-Tag') }}" class="button1" >3</a>
                <a style="text-align: center; color: white;font-weight: bold" href="{{ url('/5-Tage-Plan-3-Gerichte-am-Tag') }}" class="button1" >4</a>
                    <a style="text-align: center; color: white;font-weight: bold" href="{{ url('/5-Tage-Plan-3-Gerichte-am-Tag') }}" class="button1" >5</a>

            </div>

        <div>

            <div class="boxedCarte" style="margin-left: 18%;width: 80%; min-width: 40%">
                <h1>Essen Sie À la Carte</h1>

                <a style="text-align: center; color: white;font-weight: bold;" href="{{ url('/shop') }}" class="button3" >Zum Shop</a>
            </div>
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
</div>
</body>

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

</div>
{{--        </body>--}}
</html>
