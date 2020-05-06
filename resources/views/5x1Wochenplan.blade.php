@include("layouts.header")



{{--<div class="container">--}}

    <form method="post" action="overview">
@csrf
        <h1 style="color: lightblue" class="text"> Erstellen Sie Ihren Wochenplan </h1>
<br>
{{--        <div class="boxed" style="background-color: slategray; border: 1px solid white;">--}}





        <h3 class="textm1" style="color: darkgreen"> Tag 1 </h3>

        <div class="mm4" style="">




            <div class="mm4-column">
            <select required name="m1"id="m1" onchange="picturemChickenm2('textm1', 'imgm1','m1','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                <option disabled value="" selected="selected">Gericht 1</option>



            <?php


                $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts ORDER BY name asc";
                    $result = mysqli_query($connect, $query);




                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

            </select>

                <div>
                <img id="imgm1" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                 <div    class="textm1">

                        <div>
                    <h3 id="textm1" style="display: initial" class="textm1" > </h3>
                         </div>
                 </div>



            </div>

        </div>



        <hr>

        <h3 class="textm1" style="color: darkgreen"> Tag 2 </h3>

        <div class="mm4" style="">




            <div class="mm4-column">
                <select required name="m2"id="m2" onchange="picturemChickenm2('textm2', 'imgm2','m2','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 1</option>




                <?php

                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

                </select>

                <div>
                    <img id="imgm2" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                <div    class="textm1">

                    <div>
                        <h3 id="textm2" style="display: initial" class="textm1" > </h3>
                    </div>
                </div>



            </div>
        </div>



        <hr>

        <h3 class="textm1" style="color: darkgreen"> Tag 3 </h3>

        <div class="mm4" style="">




            <div class="mm4-column">
                <select required name="m3"id="m3" onchange="picturemChickenm2('textm3', 'imgm3','m3','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 1</option>




                <?php

                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

                </select>

                <div>
                    <img id="imgm3" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                <div    class="textm1">

                    <div>
                        <h3 id="textm3" style="display: initial" class="textm1" > </h3>
                    </div>
                </div>



            </div>

        </div>





        <hr>

        <h3 class="textm1" style="color: darkgreen"> Tag 4 </h3>

        <div class="mm4" style="">




            <div class="mm4-column">
                <select  required name="m4"id="m4" onchange="picturemChickenm2('textm4', 'imgm4','m4','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 1</option>




                <?php

                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

                </select>

                <div>
                    <img id="imgm4" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                <div    class="textm1">

                    <div>
                        <h3 id="textm4" style="display: initial" class="textm1" > </h3>
                    </div>
                </div>



            </div>
        </div>





        <hr>

        <h3 class="textm1" style="color: darkgreen"> Tag 5 </h3>


        <div class="mm4" style="">




            <div class="mm4-column">
                <select required name="m5"id="m5" onchange="picturemChickenm2('textm5', 'imgm5','m5','{{$_POST['mealsize']}}')" class="btn btn-info" required>
                    <option disabled value="" selected="selected">Gericht 1</option>




                <?php

                    $connect = mysqli_connect("localhost", "root", "", "db");
                    $query = "SELECT * FROM produccts";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result))
                    { echo '

                <option onclick="picturemChickenm2("'.$row['name'].'")" name="'.$row['name'].'" value="'.$row['name'].'" >'.$row['name'].'</button>
                '; }?>

                </select>

                <div>
                    <img id="imgm5" src='' style="display:block;margin:auto;width: 150px;display:none;border-radius: 30%;"/>
                </div>

                <div    class="textm1">

                    <div>
                        <h3 id="textm5" style="display: initial" class="textm1" > </h3>
                    </div>
                </div>



            </div>


        </div>


        <div>
            <button id="zurkasse5x2" type="submit" class="btn btn-danger" style="margin-left: 45%"> Zur Kasse </button>

        </div>
    </form>

<br>
<br>
<br>
<br>

<br>

@include('layouts.footer')


@include('layouts/script')

