
<?php

use Anam\Phpcart\Cart;



// 5x2





if(isset($_SESSION['mealsizeplan'])){   // means its a plan
    $selectsize = $_SESSION['mealsizeplan'];

    $price="preisShop". strtoupper($_SESSION['mealsizeplan'][0]).substr($_SESSION['mealsizeplan'],1 );

}
$p='('.$selectsize.")";


$allProductNames=[];
$allPrices=[];


    if(isset($_POST['m1'])){
    $_SESSION['valm1'] = $_POST['m1'];

    $valm1 = $_SESSION["valm1"];
        array_push($allProductNames, $valm1.$p);
}
if(isset($_POST['s1'])){
    $_SESSION['vals1'] = $_POST['s1'];
    $vals1 = $_SESSION["vals1"];
    array_push($allProductNames, $vals1.$p);

}

    if(isset($_POST['a1'])){
    $_SESSION['vala1'] = $_POST['a1'];
    $vala1 = $_SESSION["vala1"];
        array_push($allProductNames, $vala1.$p);

    }

        if(isset($_POST['m2'])){
    $_SESSION['valm2']= $_POST['m2'];
    $valm2 = $_SESSION["valm2"];
            array_push($allProductNames, $valm2.$p);

        }

if(isset($_POST['s2'])){
    $_SESSION['vals2'] = $_POST['s2'];
    $vals2 = $_SESSION["vals2"];
    array_push($allProductNames, $vals1.$p);

}

            if(isset($_POST['a2'])){
    $_SESSION['vala2']= $_POST['a2'];
    $vala2 = $_SESSION["vala2"];
                array_push($allProductNames, $vala1.$p);

            }
                if(isset($_POST['m3'])){
    $_SESSION['valm3'] = $_POST['m3'];
    $valm3 = $_SESSION["valm3"];

                    array_push($allProductNames, $valm3.$p);
                }

if(isset($_POST['s3'])){
    $_SESSION['vals3'] = $_POST['s3'];
    $vals3 = $_SESSION["vals3"];
    array_push($allProductNames, $vals3.$p);

}

                    if(isset($_POST['a3'])){
    $_SESSION['vala3'] = $_POST['a3'];
    $vala3 = $_SESSION["vala3"];
                        array_push($allProductNames, $vala3.$p);

                    }
                        if(isset($_POST['m4'])){
    $_SESSION['valm4']= $_POST['m4'];
    $valm4 = $_SESSION["valm4"];
                            array_push($allProductNames, $valm4.$p);

                        }

if(isset($_POST['s4'])){
    $_SESSION['vals4'] = $_POST['s4'];
    $vals4 = $_SESSION["vals4"];
    array_push($allProductNames, $vals4.$p);

}
                            if(isset($_POST['a4'])){
    $_SESSION['vala4']= $_POST['a4'];
    $vala4 = $_SESSION["vala4"];

                                array_push($allProductNames, $vala4.$p);
                            }

                                if(isset($_POST['m5'])){
    $_SESSION['valm5'] = $_POST['m5'];
    $valm5 = $_SESSION["valm5"];
                                    array_push($allProductNames, $valm5.$p);

                                }

if(isset($_POST['s5'])){
    $_SESSION['vals5'] = $_POST['s5'];
    $vals5 = $_SESSION["vals5"];
    array_push($allProductNames, $vals5.$p);

}

                                    if(isset($_POST['a5'])){
    $_SESSION['vala5'] = $_POST['a5'];
    $vala5 = $_SESSION["vala5"];
                                        array_push($allProductNames, $vala5.$p);

                                    }




    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ylvmanad_laravel";

    $cart = new Cart();



// Create connection

    $conn = new mysqli('localhost', 'root', "", 'db');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$valm1'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);


            $cart->add([
                'id'       => $valm1.$p,
                'name'     => $valm1,
                'quantity' => 1,
                'price'    => $news[$price],
                'size'      => $selectsize,
                                'plan'     => "no",

            ]);


        }
    }

if (isset($vals1)) {
    if( $result = $conn->query("SELECT name,$price FROM produccts where name='$vals1'")) {



        while ($news = mysqli_fetch_assoc($result)) {

            array_push($allPrices, (float)$news[$price]);


            $cart->add([
                'id'       => $vals1.$p,
                'name'     => $vals1,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);


        }
    }
}



    if (isset($vala1)) {
        if( $result = $conn->query("SELECT name,$price FROM produccts where name='$vala1'")) {



        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $vala1.$p,
                'name'     => $vala1,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);


        }
    }
    }

    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$valm2'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $valm2.$p,
                'name'     => $valm2,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);


        }
    }


if (isset($vals2)) {
    if( $result = $conn->query("SELECT name,$price FROM produccts where name='$vals2'")) {



        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $vals2.$p,
                'name'     => $vals2,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);


        }
    }
}

if (isset($vala2)) {
    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$vala2'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $vala2.$p,
                'name'     => $vala2,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);


        }
    }
}







    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$valm3'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);


            $cart->add([
                'id'       => $valm3.$p,
                'name'     => $valm3,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);
        }
    }



if (isset($vals3)) {
    if( $result = $conn->query("SELECT name,$price FROM produccts where name='$vals3'")) {



        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $vals3.$p,
                'name'     => $vals3,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);


        }
    }
}




    if (isset($vala3)) {
    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$vala3'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $vala3.$p,
                'name'     => $vala3,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);
        }
    }}


    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$valm4'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $valm4.$p,
                'name'     => $valm4,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);
        }
    }


if (isset($vals4)) {
    if( $result = $conn->query("SELECT name,$price FROM produccts where name='$vals4'")) {



        while ($news = mysqli_fetch_assoc($result)) {

            array_push($allPrices, (float)$news[$price]);


            $cart->add([
                'id'       => $vals4.$p,
                'name'     => $vals4,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);


        }
    }
}




        if (isset($vala4)) {
    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$vala4'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $vala4.$p,
                'name'     => $vala4,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);
        }
    }}

    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$valm5'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);


            $cart->add([
                'id'       => $valm5.$p,
                'name'     => $valm5,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);
        }
    }


if (isset($vals5)) {
    if( $result = $conn->query("SELECT name,$price FROM produccts where name='$vals5'")) {



        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);



            $cart->add([
                'id'       => $vals5.$p,
                'name'     => $vals5,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);


        }
    }
}




            if (isset($vala5)) {
    if ($result = $conn->query("SELECT name,$price FROM produccts where name='$vala5'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($allPrices, (float)$news[$price]);


            $cart->add([
                'id'       => $vala5.$p,
                'name'     => $vala5,
                'quantity' => 1,
                'price'    => $news[$price],
                'plan'     => "no",

                'size'      => $selectsize
            ]);
        }
    }
    }



//    $vaal= (string) date('mdYHis', time());


if(isset($_SESSION['mealsizeplan'])){   // means its a plan






    foreach($allProductNames as $result) {
                $cart->remove($result);
                }

    $allProductNames=implode(" ",$allProductNames);
    $allProductNames = str_replace("(medium)", ".", $allProductNames);
    $allProductNames = str_replace("(klein)", ".", $allProductNames);
    $allProductNames = str_replace("(gross)", ".", $allProductNames);


    $cart->add([
        'id'       => rand(1,1111).$_SESSION['whichplan'],
        'plan'     => $allProductNames,
        'name'     => $_SESSION['whichplan'],
        'price'     => array_sum( $allPrices),
        'quantity' => 1,
        'size'      => "",
        'description'  => $allProductNames,
    ]);



}

$_SESSION['arrayprices']=$allPrices;
$_SESSION['arraynames']=$allProductNames;


$allPrices= 0;
$allProductNames = [];





$_SESSION['datecode'] = date('dmYhm');




    $_SESSION['cart'] = $cart;
    $conn->close();

//    $_SESSION["color"] = "red";
//    header("Refresh:0; url=seno");



echo view('overview');

?>

<script>

if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>
