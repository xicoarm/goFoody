<?php
session_start();
use Anam\Phpcart\Cart;

if(isset($_POST['selectsize'])){
    $s= $_POST['selectsize'];
//    echo $s;
//    $productadded= $_SESSION['name'];

$x= $_POST['nameid'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ylvmanad_laravel";


$name = $_SESSION['name'];
// Create connection

    $conn = new mysqli('localhost', 'root', "", 'db');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($result = $conn->query("SELECT name,price, description1 FROM produccts where name= '$name' ")) {

        while ($news = mysqli_fetch_assoc($result)) {


            if(isset($cart)){
                echo "asd";
                if($cart->has($x)){
                    echo "asd";
                    $a = $x;
                    $a .= "-";

                $cart->add([
                    'id'       => $a ,
                    'name'     => $a,
                    'quantity' => $_POST['quantity'],
                    'price'    => (float)$news['price'] * (float)$_POST['quantity'],
                    'size'      =>$_POST['quantity']. $_POST['selectsize']
                ]);

            }

            else{

                $cart->add([
                    'id'       => rand(300,30000).$news['name'] ,
                    'name'     => '-'.$news['name'],
                    'quantity' => $_POST['quantity'],
                    'price'    => (float)$news['price'] * (float)$_POST['quantity'],
                    'size'      =>$_POST['quantity']. $_POST['selectsize']
                ]);
            }
            }

            else{
                if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = new Cart();
                }


                $_SESSION['cart']->add([
                    'id'       => rand(300,30000).$news['name'] ,
                    'name'     => $news['name'],
                    'quantity' => $_POST['quantity'],
                    'price'    => (float)$news['price'] * (float)$_POST['quantity'],
                    'size'      =>$_POST['quantity']. 'x ' . $_POST['selectsize']
                ]);

            }
        }


            }
        }

//$_SESSION['cart']->clear();
    echo $_SESSION['cart']->getItems();


if(session()->has('notif')){

        echo session()->get('notif');
    }

//    return back()->with('success','Item created successfully!');








    ?>
