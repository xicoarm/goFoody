<?php


?>
<!doctype html>
<html lang="de">
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            {{--            @yield('content')--}}
        </main>
    </div>
</header>


<div class="container">
    <div class="row">
        @csrf

    <div class="col-sm">
    <div>
        <h1> Ihre Bestellung </h1>
    </div>

    <div>

        <h2>

        </h2>

    </div>


    <div>

        <h4>
            <?php

            echo "<br>";
            echo "<br>";
//            $prices= $_SESSION["pricearray"];
//            $orders= $_SESSION["orderarray"];

//            if(empty($_SESSION['cart']->items())) {
//
//                return redirect()->to('/empty-cart')->send();
//
//                }

//            $cart= $_SESSION['cart'];
            $items = $_SESSION['cart']->getItems();
//                    $_SESSION['cart']->clear();

            foreach($items as $result) {

                if($result->plan != "no"){

                    echo nl2br("\n");

                    echo nl2br(str_replace(".", "\n", $result->plan));
                                          }

            echo "<br>";echo "<br>";

                echo $result->name;
            echo nl2br("\n");

                if($result->quantity != 1){
//                    echo  str_repeat('&nbsp;', 3);
                    echo $result->quantity;

                }

                $k= ($result->size );

            if($result->quantity != 1){
               echo "x ".$k;

            }
                else{
                    echo $k;

                }


                 if(true){ ?>

                <form action="/overview/delete" method="post">
                    @csrf
                <input hidden name="size" value="{{$result->size}}">
                <button type="submit" class="custom-checkbox"  style="background-color: red;color: white" name="deleteitem" value="{{$result->id}}" id="{{$result->size}}"  > X </button>
                </form>
                    <?php }

            }

            ?>



            <?php

            echo "<br>";

            echo "<br>";
            echo "Total: ";
            $y= $_SESSION['cart']->getTotal();
            $y= str_replace(".",",",$y);
            echo $y;
            echo " CHF (inkl. MwSt)";

//            echo $_SESSION['cart']->getItems();
            ?>

        </h4>

    </div>
        </div>

    <br>

    <div  class="col-sm">
            <script src="https://js.stripe.com/v3/"></script>

        <form action="/Bezahlung-erfolgreich-Danke!" method="post" id="payment-form">
            @csrf

            @guest
                <h2>Über Sie</h2>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Vorname</label>
                        <input class="form-control" name="vorname" type="text" placeholder="" required />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nachname</label>
                        <input class="form-control" name="nachname" type="text" placeholder="" required/>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputCity">Lieferadresse</label>
                        <input class="form-control" name="lieferadresse" type="text" placeholder="" required/>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputCity">Hausnr.</label>
                        <input class="form-control" name="hausnr" type="text" placeholder="" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Stadt</label>
                        <input class="form-control" name="stadt" type="text" placeholder="" required/>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">PLZ</label>
                        <input class="form-control" name="plz" type="text" placeholder="" required/>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Handynummer</label>
                        <input class="form-control" name="handynummer" type="text" placeholder="" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>


            @endguest

            @if (Auth::check())
                <h2>Über Sie</h2>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Vorname</label>
                        <input value="{{Auth::user()->name}}" class="form-control" name="vorname" type="text" placeholder="" required />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nachname</label>
                        <input value="{{Auth::user()->nachname}}" class="form-control" name="nachname" type="text" placeholder="" required/>
                    </div>
                </div>

                <div class="form-group col-md-5">
                    <label for="inputCity">Lieferadresse</label>
                    <input class="form-control" name="lieferadresse" type="text" placeholder="" required/>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCity">Hausnr.</label>
                    <input class="form-control" name="hausnr" type="text" placeholder="" required/>
                </div>

                    <div class="form-group col-md-2">
                        <label for="inputZip">PLZ</label>
                        <input  value="{{Auth::user()->plz}}" class="form-control" name="plz" type="text" placeholder="" required/>
                    </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input value="{{Auth::user()->email}}" class="form-control" name="email" type="email" placeholder="" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Handynummer</label>
                        <input  value="{{Auth::user()->handynummer}}" class="form-control" name="handynummer" type="text" placeholder="" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>

                @endif




                    <div class="form-style-8k">

                    </div>



            <div style="background-color: white" class="form-style-8k">

                <br>

                <label for="card-element">
                    <h2> Kredit- oder Debitkarte (Maestro) </h2>
                </label>

                <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>

            </div>
<br>
            <br>
            <br>

            <input class="btn btn-primary" value="Bezahlen" type="submit">
            <br>
            <br>
            <br>



        </form>
    </div>


    </div>
</div>


<div style="margin-top: 5%">
@include('layouts.footer')
</div>
</body>
</html>





<script>







    //auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight)+"px";
    }
    // Create a Stripe client.
    var stripe = Stripe('pk_test_dz7GxwE9sa1LHXsm1V9dg8JW003bwrS4se');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: 'black',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            'placeholder': {
                color: 'black'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');

        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form


        form.submit();
    }





</script>


<?php
if(isset($_POST['vorname'])){

    $vorname= $_POST['vorname'];
    $nachname= $_POST['nachname'];
    $lieferadresse= $_POST['lieferadresse'];
    $stadt= $_POST['stadt'];
    $plz= $_POST['plz'];
    $email= $_POST['email'];
    $handynummer= $_POST['handynummer'];

}

?>



