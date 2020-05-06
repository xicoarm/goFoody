<?php

use Anam\Phpcart\Cart;

$_SESSION['addedtocart'] = "added";

if(isset($_POST['selectsize'])){
    $_SESSION['selectsize']= $_POST['selectsize'];

    $price="preisShop". strtoupper($_SESSION['selectsize'][0]).substr($_SESSION['selectsize'],1 );




}

//echo $_SESSION['selectsize'];
$x= $_POST['nameid'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ylvmanad_laravel";


$name = $_SESSION['name'];
// Create connection

    $conn = new mysqli('localhost', 'root', "", 'db');


    $cart = $_SESSION['cart'];

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//echo $price;
//    exit();

    if ($result = $conn->query("SELECT name,$price, description1 FROM produccts where name= '$name' ")) {


        $news = mysqli_fetch_assoc($result);

                $cart= $_SESSION['cart'];


//        print_r( $news[$price]);
//        exit();

//                $news[$price] = str_replace(",",".");
                $items = $cart->items();

                $id = $name." (".((string)$_SESSION['selectsize'].")");


                if($cart->count() != 0){


                    if($cart->hascopy($id) ){
//

                        $cart->updateQty($id, $cart->get($id)->quantity + $_POST['quantity']);

                    }

                    else{

                    $cart->add([
                        'id'       => $id,
                        'name'     => $name,
                        'quantity' => $_POST['quantity'],
                        'price'    => $news[$price],
                        'size'      =>$_POST['selectsize'],
                                        'plan'     => "no",

                    ]);

                        }
                    }
                else{
                    $cart->add([
                        'id'       => $id,
                        'name'     => $name,
                        'quantity' => $_POST['quantity'],
                        'price'    => $news[$price],
                        'size'      =>$_POST['selectsize'],
                                        'plan'     => "no",

                    ]);
                }







        $_SESSION['cart'] = $cart;


        $_SESSION['datecode'] = date('dmYhm');


if(session()->has('notif')){

        echo session()->get('notif');
    }

    $mesg= ($name. " in den Warenkorb hinzugefügt.");

    flash($mesg)->success();
    redirect()->back()->send();



}




    ?>

{{--<script>--}}
{{--alert("a");--}}
{{--</script>--}}
