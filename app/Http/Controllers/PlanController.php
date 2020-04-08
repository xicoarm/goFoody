<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class PlanController extends Controller
{    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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

                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);
                $data_item = array();
               $items = array();

                while ($row = mysqli_fetch_array($result)) {


//                    $data_item['id'] = $row['id'];
//                    $data_item['name'] = $row['name'];
//                    $data_item['description1'] = $row['description1'];
//                    $data_item['price'] = $row['price'];

                    array_push($items, $row);
                }



            return view('5x2Wochenplan')->with('items', $items);


        }

//    public function ajaxRequestPost(Request $request)
//
//    {
//
//        $input = $request->all();
//        print_r("asfsdf");
//        return response()->json(['success'=>'Got Simple Ajax Request.']);
//
//    }

    }

?>

