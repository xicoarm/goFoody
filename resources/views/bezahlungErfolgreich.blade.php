
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

<header style="max-width: 100%">

    <div class="top-nav container">
        @include('data')
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
<body style="width: 90%">

<div class="erfolgreich" style="margin-left: 20%">

    <div>
        <h1 style="color:darkseagreen; position:absolute; top: 10%; left: 10%"> Bezahlung erfolgreich!</h1>
    </div>


    <div>
        <img  src="imagenes/deliverycar.png" style="position:relative;left:120%;">

    </div>

    <div>
        <img  src="imagenes/deliveryguy.png" style="position:relative;left:-23%;width: 80%">

    </div>

    <div>

        <h1 style=" width:30%; position:absolute;top : 58%  ;left:70%; color: deepskyblue"> ...bis bald!</h1>
    </div>


    <h2 style="position:absolute;top : 25%; left:14%"> Ihre Daten: </h2>


    <div style="position:absolute;top : 35%; left:14%">

        <?php
        $token = $_POST["stripeToken"];
        $vorname= $_POST['vorname'];
        $nachname= $_POST['nachname'];
        $lieferadresse= $_POST['lieferadresse'];
        $stadt= $_POST['stadt'];
        $plz= $_POST['plz'];
        $email= $_POST['email'];
        $handynummer= $_POST['handynummer'];

        $_SESSION['name'] = $vorname;
        $_SESSION['nachname'] = $nachname;
        $_SESSION['lieferadresse'] = $lieferadresse;
        $_SESSION['stadt'] = $stadt;
        $_SESSION['plz'] = $plz;
        $_SESSION['email'] = $email;
        $_SESSION['handynummer'] = $handynummer;

        echo  nl2br ("$vorname \n $nachname \n  $email");

        ?>


        <div style=" border: 3px solid bisque">

            <?php
            $dd= (string)$_SESSION['datecode'];
            echo  nl2br ("$lieferadresse \n $stadt,  $plz  \n  Tel.: $handynummer \n  Bestellungsnr.: $dd");
            ?>



        </div>




                <div style="position:absolute;top : 35%; left:14%">

                    <h2> hallo </h2>



                    </div>




            <div style="margin:30px;">
            <a style="text-align: center; color: white; font-weight: bold" class="button1" href="/welcome">Home </a>
                <a style="text-align: center; color: white; font-weight: bold" class="button1" href="/shop-Auswahl">Zurück zum Shop </a>
            </div>

    </div>



</div>





<?php


require_once(__DIR__.'/../../../vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_Nfa56xcqzEHcvB7UFC8W4nFB00PTrNqSqG');


    $cart = $_SESSION['cart'];
if(isset($_POST['stripeToken'])) {

    $prices= $_SESSION["pricearray"];
    $orders= $_SESSION["orderarray"];

    $priceX100= (float)$cart->getTotal() * 100;

    $token= $_POST["stripeToken"];

}

$charge= \Stripe\Charge::create([
    "amount" => $priceX100,
    "currency" => "chf",
    "description" => "versand......",
    "source" => $token
]);

\Stripe\Stripe::setApiKey('sk_test_BQokikJOvBiI2HlWgH4olfQ2');
$customer = \Stripe\Customer::create([
    'description' => 'example customer',
    'email' => 'email@example.com',
    'payment_method' => 'pm_card_visa',
]);

echo $customer;

echo "<pre>, print_r($charge),</pre>";


$_SESSION['datecode'] = date('dmYhm');
?>
