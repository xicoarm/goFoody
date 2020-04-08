
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FitFit</title>

    <!-- Fonts -->
    <!-- Styles -->
    {{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link href="/css/app.css" rel="stylesheet">
    {{--    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">--}}
    {{--    <link href="/css/app.css" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>
<body>
<header style="max-width: 100%;">

    <div class="top-nav container">
        <div style="color: black; max-width: 100%" class="logo">FitFit</div>

        <div style="position:relative; right: 10%; max-width: 150%">
            <ul>
                <li><a style="margin: 28px;font-weight: bold; color:black;" href="/welcome">Home</a></li>
{{--                <li><a style="margin: 20px;font-weight: bold; color:black;" href="#">Über uns</a></li>--}}
                <li><a style="margin: 28px;font-weight: bold; color:black;" href="/shop-Auswahl">Shop</a></li>
                <li><a style="margin: 28px;font-weight: bold; color:black;" href="#">Blog</a></li>
                <li><a style="margin: 28px;font-weight: bold; color:black;" href="#">Cart</a></li>
            </ul>
        </div>

    </div> <!-- end top-nav -->

</header>


<div class="mm" style="position:relative; left: 10% ;margin-right: 5%;height: 80%;">
        @csrf

    <div style="position:absolute; top: 5%; right: 80%">
        <h1> Ihre Bestellung </h1>
    </div>

    <div style="position:absolute; top: 15%; left: 6%">
        @include('overviewBack')
        <h2>
        <?php

        $orders= $_SESSION["orderarray"];

        foreach($orders as $result) {
            echo $result, '  <br>';
        }

        echo '<br>';
            echo "Total (inkl. MwSt.) ";
        ?>
        </h2>

    </div>


    <div style="position:absolute; top: 5%; right: 80%">

    </div>

    <div style="position:absolute; top: 15%; left: 25%">

        <h2>
            <?php
            $prices= $_SESSION["pricearray"];
            $orders= $_SESSION["orderarray"];

            foreach($prices as $result) {
            echo $result, ' CHF <br>';

            }
            echo '<br>';
            echo array_sum($prices), ' CHF' ;
            ?>
        </h2>

    </div>


    <br>
            <script src="https://js.stripe.com/v3/"></script>

        <form action="/Bezahlung-erfolgreich-Danke!" method="post" id="payment-form">
            @csrf

            <div style="position:absolute; top: 1%; right: 15%">
            <div class="form-style-8">
                @guest
                <h2>Über Sie</h2>

                    <input name="vorname" type="text" placeholder="Vorname*" required />
                    <input name="nachname" type="text" placeholder="Nachname*" />  //requiredrequiredrequiredrequired
                    <input name="lieferadresse" type="text" placeholder="Lieferadresse*" />
                    <input name="stadt" type="text"  placeholder="Stadt*"/>
                    <input name="plz" type="text" placeholder="PLZ*"/>
                    <br>
                    <input name="email" type="email"  placeholder="Email" />
                    <input type="text" name="handynummer"  placeholder="Handynummer" />
                    <textarea placeholder="Kommentare" onkeyup="adjust_textarea(this)"></textarea>

            </div>
                @endguest


                    <div class="form-style-8k">
                        <h2>halloo</h2>
                    </div>

                @endif

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
                <input class="button1" value="<?php echo array_sum($_SESSION['pricearray'])?>CHF Bezahlen" type="submit">
            </div>

            </div>
</form>
</div>

</body>



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
