<?php


//session_start();
$token = $_POST["stripeToken"];
$vorname= $_POST['vorname'];
$nachname= $_POST['nachname'];
$lieferadresse= $_POST['lieferadresse'];
$stadt= $_POST['stadt'];
$plz= $_POST['plz'];

$plz= '8922';
$email= $_POST['email'];
$handynummer= $_POST['handynummer'];

//$datecode= $_SESSION["datecode"];
$a='123';

?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">


Hello <?php echo $vorname; ?>,

<h1> Vielen Dank f&#252;r Ihren Einkauf! </h1>

<h2><u><?php

        $dd= $_SESSION['datecode'];

        echo  "Ihre Bestellungsnr. : ". $dd ."";

        ?></u></h2>

<div>
    <p><b><?php
            $prices= $_SESSION["pricearray"];
            $prices = array_sum($prices);
            $orders= $_SESSION["orderarray"];

            foreach($orders as $result) {
                echo $result, '  <br>';
            }

            echo '<br>';
            echo "Total (inkl. MwSt.) $prices CHF";
            ?></b></p>
</div>

<p><u>Lieferung montag..</u></p>

<div>

    <p><b>testVarTwo:</b>&nbsp;{{ $testVarTwo }}</p>
</div>

Thank You,
<br/>

</html>
