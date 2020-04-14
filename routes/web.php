<?php

use Anam\Phpcart\Cart;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {


    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }

    return view('welcome');
});

//Route::post('/5x2Wochenplan', function () {
//    return view('5x2Wochenplan');
//});

Route::get('5x2Wochenplan', 'PlanController@index');   // session..cart added


Route::get('5x3Wochenplan', 'PlanController@drei');
Route::get('5x1Wochenplan', 'PlanController@eins', function () {


    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }
});





//
//Route::post('/overview', function () {
//    if (session_status() == PHP_SESSION_NONE) {
//        session_start();
//    }
//
//    if(!isset($_SESSION['cart'])){
//        $cart= new Cart();
//        $_SESSION['cart'] = $cart;
//    }
//    return view('overview');
//});

Route::get('/welcome', function () {

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }

    $S_SESSION['connect']= mysqli_connect("localhost", "root", "", "db");

    return view('welcome');
});
Route::get('mail/send', 'MailController@send');

Route::get('/blanco', function () {
    return view('blanco');
});

Route::post('/Bezahlung-erfolgreich-Danke!', 'PaymentController@index');
//Route::post('Bezahlung-erfolgreich-Danke!', [ 'as' => 'Bezahlung-erfolgreich-Danke!', 'uses' => '']);
Route::post('/Wochenplan', 'ChoiceController@index');


Route::post('/overview', function () {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }


//    $_POST['a2']
    return view('overviewBack');
});



Route::get('/overview', function () {
//    $_POST['a2']
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }
    return view('overview');
});


Route::post('/overview/delete', function () {
//    $_POST['a2']
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }

    if(isset($_POST['deleteitem'])){

//        echo $_POST['deleteitem'];
//        echo " ";
//        echo $_POST['size'];

        $_SESSION['cart']->remove($_POST['deleteitem']);



            }






    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }


    return view('overview');
});






Route::get('/empty-cart', function () {
//    $_POST['a2']
    return view('empty-cart');
});









Route::get('/shop-Auswahl', function () {

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }

    return view('shop-choice');
});

Route::get('/shop', function () {



    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }


//    if()
    return view('shop');
});


Route::get('/mail', function () {
    return view('mail');
});

//Route::get('/warenkorb/{id}', ['uses'=> 'ProductController.php', 'as' => 'addtocart']);

Route::post('/data', 'NewController@index');

Route::post('/try', 'NewController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Carrito------------------



Route::get('cart/show', [
    'as'=> 'cart-show',
    'uses'=> 'CartController@show'

]);

Route::get('cart/add/{id}', [
    'as'=> 'cart-show',
    'uses'=> 'CartController@add'

]);



//injeccion de dependencias que facilita LARAVEL

//Route::bind('product', function($slug){
//
//   return App\Product::where('slug, $slig')->first();
//});


Route::get('/shop/{product}', 'ProductController@index');


//Route::post('/sample-product-back', 'ProductController@second');

Route::post('/sample-product-back',function () {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }
    return view('sample-product-back');
});

//Route::post('/sample-product-back', function () {
//
//    return view('sample-product-back');
//});







Route::get('/paymentOK', function () {

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['cart'])){
        $cart= new Cart();
        $_SESSION['cart'] = $cart;
    }

    return view('paymentOK');
});









