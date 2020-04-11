<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(!isset($_SESSION['cart'])){
            $cart= new Cart();
            $_SESSION['cart'] = $cart;
        }

        if (isset($_POST['stripeToken'])) {

            $token = $_POST["stripeToken"];
            $vorname= $_POST['vorname'];
            $nachname= $_POST['nachname'];
            $lieferadresse= $_POST['lieferadresse'];
            $stadt= $_POST['stadt'];
            $plz= $_POST['plz'];
            $email= $_POST['email'];
            $handynummer= $_POST['handynummer'];

            return view('/bezahlungErfolgreich');
//        }
//

//

    }

            }}

?>

