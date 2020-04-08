<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSS Grid Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


</head>

<body style=";position: relative;left: 10%; min-height: 400px; width: 80%; height: auto">
<header>



    <div style="font-width: bold; color: black;" class="top-nav container">
        <div class="logo">FitFit</div>

        {{--        @if (Route::has('login'))--}}
        {{--            <div style="position:absolute; top: -5%; left: 75%" class="top-right links">--}}
        {{--                @auth--}}
        {{--                    <a href="{{ url('/welcome') }}">Mein Profil</a>--}}
        {{--                    <a href="{{ url('/logout') }}">Logout</a>--}}
        {{----}}
        {{--                @else--}}
        {{--                    <a href="{{ route('login') }}">Login</a>--}}
        {{----}}
        {{--                    @if (Route::has('register'))--}}
        {{--                        <a href="{{ route('register') }}">Register</a>--}}
        {{--                    @endif--}}
        {{--                @endauth--}}
        {{--            </div>--}}
        {{--        @endif--}}


        <ul>
            <li style="color: black"><a style="color: black; font-width: bold;" href="/welcome">Home</a></li>
            <li><a style="color: black; font-width: bold;" href="/shop-Auswahl">Shop</a></li>
            <li><a style="color: black; font-width: bold;" href="#">Blog</a></li>
            <li><a style="color: black; font-width: bold;" href="#">Cart</a></li>
        </ul>
    </div> <!-- end top-nav -->
</header>

<body>


<form class="featured-section">
    <form class="container">

        <p style="color: black" class="section-description text-center">Alle unsere Produkte sind frisch gekocht und ohne Konservanten.</p>
        <br>
        <br>

        <div class="mm3">
        <div class="text-center button-container">

        </div>


        <div class="products text-center">
{{--            <div class="product">--}}

{{--                <table class="table table-bordered">--}}

                    <?php
                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts ORDER BY RAND()";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    {           $i = 0;
                                $ii=0;
                        $_SESSION['i'] = 0;
                        $i=0;
                        $_SESSION['ii'] = 0;
                        echo '
                    <div style="border: 1px solid saddlebrown;border-radius: 12px; min-width: 10%">


               <div class="grid2" style="font-size:25px; font-weight:bold">

                       <div>
                         <img style="border-radius: 50%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 20px 0 rgba(0, 0, 0, 0.49);;" src="data:image/jpeg;base64,'.base64_encode($row['i1'] ).'" height="215" width="250" class="img-thumnail"

                        </div>

                       <div>
                        <h2> '.$row['price'].'.00 CHF </h2>
                        </div>

                </div>


            </div>
                        <h2 style="color: black;">'.$row['name'].'</h2>
                        <h2 style="color: black;">'.$row['description1'].'</h2>



            <table style=" display: inline-block; padding: 4px; text-align: center; background-color: whitesmoke">

<thead>
<tr>

<th>Pro 100g: </b> &emsp;</th>
<th>kCal &ensp;</th>
<th>Eiweiss &ensp; </th>
<th>Carbs &ensp; </th>
<th>Fett </th>

</tr>
</thead>

<tbody>
<tr>
                                <td>&emsp;</td>
                            <td>'.$row['kalorien'].'&ensp;</td>
                             <td>'.$row['protein'].'&ensp;&ensp;</td>
                            <td>'.$row['carbs'].'&ensp;</td>
                            <td>'.$row['fett'].'</td>



</tr>
                </table>




            <div>



                        ' ;
                        if($row['description2']!= null){
                        echo '

                <a type="button" class="button6" > '.$row['description2'].' </a>

                <a href="/welcome" class="button6"> '.$row['description2'].' </a>
                <a href="/welcome" class="button6"> '.$row['description2'].' </a>

            </div>

     ';}

                        echo '<div>
                                    <a id = "'.$row['name'].'" onclick="addtocart(this.id)"  class="button5"> - </a>

                                    <a href="/welcome" class="button5"> + </a>



</div>  </div>  ';
                        $i=$i+1;
                         }

                    ?>

        </div> <!-- end products -->

        </div>
        <div class="text-center button-container">
            <br>
            <br>
            <br>
            <a href="#" class="button">View more products</a>
        </div>


</form>


    <script type="text/javascript">
        var items = [];



        function addtocart(item) {


            items.push(item);









        }

</script>







    <div class="blog-section">

    <div class="container">
        <h1 class="text-center">Wie funktioniert es? </h1>

        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

        <div class="blog-posts">
            <div class="blog-post" id="blog1">
                <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Erfahrungen Sasha...</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog2">
                <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Foto Küche oder mitarb</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog3">
                <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">ärztlich iöbis</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
        </div> <!-- end blog-posts -->
    </div> <!-- end container -->
</div> <!-- end blog-section -->
</div>


<footer style="background-color: lightgray">
    <div class="footer-content container">
        <div class="made-with">With <i class="fa fa-heart"></i> by FitFit</div>
        <ul>
            <li>Follow Me:</li>
            <li><a href="#"><i class="fa fa-globe"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div> <!-- end footer-content -->
</footer>

</div>
</form>
</body>
</html>


