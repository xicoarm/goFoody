
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



<div>
        @csrf

    <div>
        <h1> Ihre Bestellung </h1>
    </div>

    <div>

        <h2>
        <?php
//


        $orders= $_SESSION["orderarray"];


//        foreach($orders as $result) {
//            echo $result, '  <br>';
//        }

//        echo '<br>';
//            echo "Total (inkl. MwSt.) ";
//        ?>
        </h2>

    </div>


    <div >

        <h4>
            <?php
            echo "<br>";
            echo "<br>";
            $prices= $_SESSION["pricearray"];
            $orders= $_SESSION["orderarray"];

            $cart= $_SESSION['cart'];
//            echo 1;
//            echo $cart->getItems();

            $items = $cart->items();

            foreach($items as $result) {
            echo $result->name;
            echo " - x";
            echo $result->quantity;
            }
              echo "<br>";
            echo "<br>";
            echo "Total: ";
            echo $cart->getTotal();
            echo " CHF (inkl. MwSt)";

//            echo $_SESSION['cart']->getItems();
            ?>
        </h4>

    </div>


    <br>
            <script src="https://js.stripe.com/v3/"></script>
        <div>
        <form action="/Bezahlung-erfolgreich-Danke!" method="post" id="payment-form">
            @csrf

            <div>
            <div class="form-style-8">
                @guest
                <h2>Über Sie</h2>

                    <input name="vorname" type="text" placeholder="Vorname*" required />
                    <input name="nachname" type="text" placeholder="Nachname*" required/>
                    <input name="lieferadresse" type="text" placeholder="Lieferadresse*" required/>
                    <input name="stadt" type="text"  placeholder="Stadt*"required/>
                    <input name="plz" type="text" placeholder="PLZ*"required/>
                    <br>
                    <input name="email" type="email"  placeholder="Email" required/>
                    <input type="text" name="handynummer"  placeholder="Handynummer" required/>
                    <textarea placeholder="Kommentare" onkeyup="adjust_textarea(this)"></textarea>

            </div>
                @endguest

                @if (Auth::check())

                    <div>
                    <h2>Über Sie</h2>

                    <input name="vorname" type="text" value="{{Auth::user()->name}}" placeholder="Vorname*" required />
                    <input name="nachname" type="text" value="{{Auth::user()->nachname}}" placeholder="Nachname*" required/>
                    <input name="lieferadresse" type="text"value="{{Auth::user()->adresse}}" placeholder="Lieferadresse*" required/>
                    <input name="stadt" type="text" value="{{Auth::user()->stadt}}" placeholder="Stadt*"required/>
                    <input name="plz" type="text" value="{{Auth::user()->plz}}"  placeholder="PLZ*" required/>
                    <br>
                    <input name="email" type="email" value="{{Auth::user()->email}}" placeholder="Email" required/>
                    <input type="text" name="handynummer"  placeholder="Handynummer" required />
                    <textarea placeholder="Kommentare" onkeyup="adjust_textarea(this)"></textarea>

                    </div>
                @endif

            </div>

                    <div class="form-style-8k">
                        <h2>halloo</h2>
                    </div>



            <div class="form-style-8k">
                <h2>Bezahlung</h2>
                <br>

                <label for="card-element">
                    Kredit- oder Debitkarte (Maestro)
                </label>

                <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
                <input class="button1" value="<?php echo array_sum($_SESSION['pricearray'])?> CHF Bezahlen" type="submit">
            </div>


</form>
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
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
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


        <?php

        $cart->clear();

        ?>

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



