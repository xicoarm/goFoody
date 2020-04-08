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

<body style="position: relative;left: 10%; min-height: 400px; width: 80%; height: auto">
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





{{--<div class="container">--}}

    <form method="post" action="overview">
@csrf<h1 style="position:relative; left: 20%;color: lightblue" class="text"> Erstellen Sie Ihren Wochenplan </h1>

{{--        <div class="boxed" style="background-color: slategray; border: 1px solid white;">--}}



        <h1 style="color: darkgreen; margin:-3%"> Tag 1 </h1>
            <h1></h1>
        <div class="tagseparate">
            <select name="m1"id="m1" onchange="picturemChickenm2('textm1', 'imgm1','m1')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>



            <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

            </select>


            <div class="im1">

                <img class='im1' id="imgm1" src='' style="display:none"/> </div>

            <div class="textm1">
            <h1 id="textm1" style="display: initial" class="textm1" > </h1> </div>





            <select name="a1" id="a1" onchange="picturemChickenm2('texta1', 'imga1','a1')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>
            </select>

            <div class="im2">
                <img class='im2' id="imga1" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta1" style="display: initial" class="textm1" > </h1> </div>
            {{--        //tag1--}}
      </div>



{{--        //tag 2--}}
        <h1 style="color: darkgreen; margin:-3%"> Tag 2 </h1>
     <div class="tagseparate">
            <select name="m1"id="m2" onchange="picturemChickenm2('textm2', 'imgm2','m2')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>



                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

            </select>


            <div class="im1">

                <img class='im1' id="imgm2" src='' style="display:none"/> </div>

            <div class="textm1">
                <h1 id="textm2" style="display: initial" class="textm1" > </h1> </div>





            <select name="a1" id="a2" onchange="picturemChickenm2('texta2', 'imga2','a2')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>
            </select>

            <div class="im2">
                <img class='im2' id="imga2" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta2" style="display: initial" class="textm1" > </h1> </div>
            {{--        //tag1--}}
        </div>

{{--            TAg 3--}}
        <h1 style="color: darkgreen; margin:-3%"> Tag 3 </h1>
        <div class="tagseparate">
            <select name="m1"id="m3" onchange="picturemChickenm2('textm3', 'imgm3','m3')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>



                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

            </select>


            <div class="im1">

                <img class='im1' id="imgm3" src='' style="display:none"/> </div>

            <div class="textm1">
                <h1 id="textm3" style="display: initial" class="textm1" > </h1> </div>





            <select name="a1" id="a3" onchange="picturemChickenm2('texta3', 'imga3','a3')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>
            </select>

            <div class="im2">
                <img class='im2' id="imga3" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta3" style="display: initial" class="textm1" > </h1> </div>
            {{--        //tag1--}}
        </div>





{{--        //Tag 4--}}
        <h1 style="color: darkgreen; margin:-3%"> Tag 4 </h1>
        <div class="tagseparate">
            <select name="m1"id="m4" onchange="picturemChickenm2('textm4', 'imgm4','m4')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>



                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

            </select>


            <div class="im1">

                <img class='im1' id="imgm4" src='' style="display:none"/> </div>

            <div class="textm1">
                <h1 id="textm4" style="display: initial" class="textm1" > </h1> </div>





            <select name="a1" id="a4" onchange="picturemChickenm2('texta4', 'imga4','a4')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>
            </select>

            <div class="im2">
                <img class='im2' id="imga4" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta4" style="display: initial" class="textm1" > </h1> </div>
            {{--        //tag1--}}
        </div>




{{--        //Tag 5--}}
{{----}}

        <h1 style="color: darkgreen; margin:-3%"> Tag 5 </h1>
        <div class="tagseparate">
            <select name="m1"id="m5" onchange="picturemChickenm2('textm5', 'imgm5','m5')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>



                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

            </select>


            <div class="im1">

                <img class='im1' id="imgm5" src='' style="display:none"/> </div>

            <div class="textm1">
                <h1 id="textm5" style="display: initial" class="textm1" > </h1> </div>





            <select name="a1" id="a5" onchange="picturemChickenm2('texta5', 'imga5','a5')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "db");
                $query = "SELECT * FROM produccts";
                $result = mysqli_query($connect, $query);

                while($row = mysqli_fetch_array($result))
                { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>
            </select>

            <div class="im2">
                <img class='im2' id="imga5" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta5" style="display: initial" class="textm1" > </h1> </div>
            {{--        //tag1--}}
        </div>

                <button type="submit" class="button1" style="margin-left: 45%">Zur Kasse </button>

    </form>


</body>
</html>



<script type="text/javascript">




    function picturemChickenm2(textid, imageid, sectionid) {

        products = ["Chicken mit Reis", "Pro 480g: kCal 652, Carbs 73g, Eiweiss 37g, Fett 24g", "price", "description1",
            "Paella Marisco", "Pro 480g: kCal 622, Carbs 72g, Eiweiss 32g, Fett 22g", "Paella mit Fish und ....",
            "Wurst mit Champignons und Vegetables", "Pro 480g: kCal 632, Carbs 73g, Eiweiss 33g, Fett 23g", "description1"];

        var pic = "imagenes\\"+ document.getElementById(sectionid).value +".png";
        document.getElementById(imageid).src = pic.replace();
        document.getElementById(imageid).style.display = 'block';

        for (index = 0; index < products.length; ++index) {
            if (products[index] == document.getElementById(sectionid).value) {
                document.getElementById(textid).innerText = (products[index + 1]).toString();
                // document.getElementById(text).style.display = 'initial';
                // document.getElementById(textid).style.border.co;
            }
        }
    }



    function picturemChickenm3(sectionid, wheretodisplay, size) {

        products = ["Chicken mit Reis", "Pro 480g: kCal 652, Carbs 73g, Eiweiss 37g, Fett 24g", "price", "description1",
            "Paella Marisco", "Pro 480g: kCal 622, Carbs 72g, Eiweiss 32g, Fett 22g", "Paella mit Fish und ....",
            "Wurst mit Champignons und Vegetables", "Pro 480g: kCal 632, Carbs 73g, Eiweiss 33g, Fett 23g", "description1"];

        alert("hhhh");
        for (index = 0; index < products.length; ++index) {
            if (products[index] == document.getElementById(sectionid).value) {

                if (size == "default"){
                    document.getElementById(wheretodisplay).innerText = (products[index + 1]).toString();
                }

                else {
                    if (size == "klein") {
                        document.getElementById(wheretodisplay).innerText = (products[index + 1]).toString();
                    }
                    if (size == "medium") {
                        document.getElementById(wheretodisplay).innerText = (products[index + 2]).toString();
                    }
                    if (size == "gross") {
                        document.getElementById(wheretodisplay).innerText = (products[index + 3]).toString();
                    }
                }
                // document.getElementById(text).style.display = 'initial';
                // document.getElementById(textid).style.border.co;
            }
        }
    }
</script>







