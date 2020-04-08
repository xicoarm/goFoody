<?php

namespace App\Http\Controllers;

use Hamcrest\Arrays\IsArrayWithSize;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class NewController extends Controller
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
    public function index(Request $request)

    {

        $input = $request->all();

        return  view('data')->with('input', $input);

//        return response()->json(['success'=>'Got Simple Ajax Request.']);

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

