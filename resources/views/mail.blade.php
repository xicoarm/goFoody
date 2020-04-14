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
            $cart= $_SESSION['cart'];
            $items = $cart->items();
            //                    $cart->clear();
            foreach($items as $result) {
                echo $result->name;
                echo str_repeat('&nbsp;', 3);

                $k= ($result->size );
                echo $k;
                echo str_repeat('&nbsp;', 3);

                if($result->quantity != 1){
                    echo  str_repeat('&nbsp;', 3)."x ";
                    echo $result->quantity;

                }
                echo "<br>";


            }




            echo "<br>";
            echo "Total: ";
            echo $_SESSION['cart']->getTotal();

            echo " CHF (inkl. MwSt)";

            //            echo $_SESSION['cart']->getItems();
            ?>
            </b></p>
</div>

<p><u>Lieferung montag..</u></p>

<div>


</div>

Thank You,
<br/>

</html>
