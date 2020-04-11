<?php

use Anam\Phpcart\Cart;



if(isset($_POST['selectsize'])){
    $_SESSION['selectsize']= $_POST['selectsize'];
//    echo $s;
//    $productadded= $_SESSION['name'];
}
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

    if ($result = $conn->query("SELECT name,price, description1 FROM produccts where name= '$name' ")) {


        $news = mysqli_fetch_assoc($result);

                $cart= $_SESSION['cart'];


                $items = $cart->items();

                $id = $name." (".((string)$_SESSION['selectsize'].")");


                if($cart->count() != 0){


                    if($cart->hascopy($id) ){
//

                        $cart->updateQty($id, $cart->get($id)->quantity + $_POST['quantity']);

//                        $cart->add([
//                            'id'       => $name ,
//                            'name'     => $name,
//                            'quantity' => $_POST['quantity'],
//                            'price'    => (float)$news['price'] * (float)$cart->get($name)->quantity,
//                            'size'      =>$_POST['selectsize']
//                        ]);
//
//
                    }
//
//
                    else{
//
//                                $cart->updateQty($name, 3);

//                        $cart->updateQty($name, $cart->get($name)->quantity + $_POST['quantity']);


                    $cart->add([
                        'id'       => $id,
                        'name'     => $name,
                        'quantity' => $_POST['quantity'],
                        'price'    => $news['price'],
                        'size'      =>$_POST['selectsize']
                    ]);

                        }
                    }

                else{
                    $cart->add([
                        'id'       => $id,
                        'name'     => $name,
                        'quantity' => $_POST['quantity'],
                        'price'    =>  $news['price'],
                        'size'      =>$_POST['selectsize']
                    ]);
                }






                // no hay ningun item
//                else{
//                    $cart->add([
//                        'id'       => $name ,
//                        'name'     => $name,
//                        'quantity' => $_POST['quantity'],
//                        'price'    => (float)$news['price'] * (float)$_POST['quantity'],
//                        'size'      =>$_POST['selectsize']
//                    ]);
//                }


//                    $x= $cart->has($item->id);
//                    $id= $cart->get($item->name);

//                    if( ($cart->has($name)) {

//                    $cart->add([
//                        'id'       => '12' ,
//                        'name'     => $x,
//                        'quantity' => $_POST['quantity'],
//                        'price'    => (float)$news['price'] * (float)$_POST['quantity'],
//                        'size'      =>$_POST['selectsize']
//                    ]);
//                    if((string)$cart->get($name)->size == $_POST['quantity']){
//
//                        $cart->add([
//                            'id'       => "555" ,
//                            'name'     => '555',
//                            'quantity' => $_POST['quantity'],
//                            'price'    => (float)$news['price'] * (float)$_POST['quantity'],
//                            'size'      =>$_POST['selectsize']
//                        ]);
//
//                    }
//

//                }

//        $cart->clear();

        $_SESSION['cart'] = $cart;

//
//                $cart= $_SESSION['cart'];
//                $items = $cart->items();
////              $cart->clear();
//                foreach($items as $item) {
//
////                    $x= $cart->has($item->id);
////                    $id= $cart->get($item->name);
//
//                    if( ($cart->has($name)) {
//
//
//                        if( (string)($cart->get($name)->size) == (string)$_POST['selectsize'] )  {
//                        $cart->add([
//                            'id'       => "555" ,
//                            'name'     => '555',
//                            'quantity' => $_POST['quantity'],
//                            'price'    => (float)$news['price'] * (float)$_POST['quantity'],
//                            'size'      =>$_POST['selectsize']
//                        ]);
//                        $cart->update([
//
//                            'quantity'  => (float)$cart->get($item->id)->quantity + (float)$_POST['quantity'],
//                            'price'     =>(float)$news['price'] * $cart->get($item->id)->quantity
//
//                        ]);
//
//                        $_SESSION['cart'] = $cart;
//
////                        $cart->add([
////                            'id'       => "123111" ,
////                            'name'     => '113411',
////                            'quantity' => $_POST['quantity'],
////                            'price'    => (float)$news['price'] * (float)$_POST['quantity'],
////                            'size'      =>$_POST['selectsize']
////                        ]);
//
//
////
////                       if ((string)$cart->get($item->name)->size == (string)$_SESSION['selectsize']) {
////
////                        $cart->add([
////                    'id'       => "asdfasf" ,
////                    'name'     => 'bbb',
////                    'quantity' => $_POST['quantity'],
////                    'price'    => (float)$news['price'] * (float)$_POST['quantity'],
////                    'size'      =>$_POST['selectsize']
////                ]);
//
////                    }
////                    }}
//                    }
//
//



//                $cart->add([
//                    'id'       => $a ,
//                    'name'     => $a,
//                    'quantity' => $_POST['quantity'],
//                    'price'    => (float)$news['price'] * (float)$_POST['quantity'],
//                    'size'      =>$_POST['selectsize']
//                ]);



//            else{
//
//                $cart->add([
//                    'id'       => rand(300,30000).$news['name'] ,
//                    'name'     => '-'.$news['name'],
//                    'quantity' => $_POST['quantity'],
//                    'price'    => (float)$news['price'] * (float)$_POST['quantity'],
//                    'size'      =>$_POST['quantity']. $_POST['selectsize']
//                ]);



//                if(!isset($cart)){
//                $_SESSION['cart'] = new Cart();
//                }


//                $cart->add([
//                    'id'       => rand(300,30000).$news['name'] ,
//                    'name'     => $news['name'],
//                    'quantity' => $_POST['quantity'],
//                    'price'    => (float)$news['price'] * (float)$_POST['quantity'],
//                    'size'      => $_POST['selectsize']         //$_POST['quantity']. 'x ' . $_POST['selectsize']
//                ]);





        $_SESSION['datecode'] = date('dmYhm');


if(session()->has('notif')){

        echo session()->get('notif');
    }

    $mesg= ($name. " in den Warenkorb hinzugefügt.");

    flash($mesg)->success();
    redirect()->back()->send();



}




    ?>

<script>
alert("a");
</script>
