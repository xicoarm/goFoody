<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoiceController extends Controller
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
       if(isset($_POST['mealsize']) and isset($_POST['mealsxday'])){
           session_start();
           $_SESSION['mealsizeplan'] = $_POST['mealsize'];
           $_SESSION['whichplan']= "Wochenplan 5x".$_POST['mealsxday']." - ".$_POST['mealsize'];


           if($_POST['mealsxday']== "2")

        {

            return view('5x2Wochenplan')->with("mealsize", $_POST['mealsize']);}

    if($_POST['mealsxday']== "1")

        {

            return view('5x1Wochenplan')->with("mealsize", $_POST['mealsize']);}

    if((string)$_POST['mealsxday']== "3")

        {

            return view('5x3Wochenplan')->with("mealsize", $_POST['mealsize']);}
    }


//        }
//

//

    }

            }

?>

