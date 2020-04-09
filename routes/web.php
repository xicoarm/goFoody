<?php

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
    return view('welcome');
});

//Route::post('/5x2Wochenplan', function () {
//    return view('5x2Wochenplan');
//});

Route::get('5x2Wochenplan', 'PlanController@index');

Route::post('/overview', function () {
    return view('overview');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('mail/send', 'MailController@send');

Route::get('/blanco', function () {
    return view('blanco');
});

Route::post('/Bezahlung-erfolgreich-Danke!', 'PaymentController@index');
//Route::post('Bezahlung-erfolgreich-Danke!', [ 'as' => 'Bezahlung-erfolgreich-Danke!', 'uses' => '']);



Route::post('/overview', function () {
//    $_POST['a2']
    return view('overviewBack');
});

//Route::post('/overview', 'OverviewController@index');

Route::get('/shop-Auswahl', function () {
    return view('shop-choice');
});

Route::get('/shop', function () {
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
    return view('sample-product-back');
});

//Route::post('/sample-product-back', function () {
//
//    return view('sample-product-back');
//});

















