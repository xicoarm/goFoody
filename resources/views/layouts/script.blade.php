<br>
<br>
<br>
<br>
<script type="text/javascript">

    function picturemChickenm2(textid, imageid, sectionid, mealsize) {

        products = [
            "Pouletbrust mit Basmatireis und Gemüse",
            "Hühnerbrust begleitet von Reis zur sowie von einer Gemüsemischung (Brokkoli, grüne Bohnen, Karotten und rote Paprika).",

            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "10.90", //preis für klein PLAN 11.00
            "13.90", //presi med PLAN   14.00
            "16.80",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "106.4",// kCal,
            "16", //Carbs,
            "8.2", //Eiweiss,
            "0.9", // Fett",

            "Rinderfiletstreifen mit Penne und Gemüse",
            "Rindfleisch mager geschnetzelt begleitet von Penne und einer Portion unserer Gemüsemischung, bestehend aus Brokkoli, grünen Bohnen, Karotten und rotem Pfeffer.",

            "13.90", //preis für klein shop 12.20
            "16.90", //preis für mid shop 13.70
            "19.80", //preis für gross shop 18.90

            "13.00", //preis für klein PLAN 11.00
            "16.00", //presi med PLAN   14.00
            "18.90",   // p gross PLAN     17.00

            "330",   // gewicht kelin
            "420",   // gewicht medium
            "520",   // gewicht gross


            //nährwerte pro 100g
            "188",// kCal, /
            "17,8", //Carbs,
            "13.3 ", //Eiweiss,
            "2.8", // Fett",

            "Norwegischer Lachs mit Kartofferln und Gemüse",
            "Lachs norwegischen Ursprungs, begleitet von Bratkartoffeln sowie einem Teil unserer Gemüsemischung, bestehend aus Brokkoli, grünen Bohnen, Karotten und rotem Pfeffer.",

            "14.90", //preis für klein shop 12.20
            "15.90", //preis für mid shop 13.70
            "20.80", //preis für gross shop 18.90

            "14.00", //preis für klein PLAN 11.00
            "17.00", //presi med PLAN   14.00
            "19.90",   // p gross PLAN     17.00

            "330",   // gewicht kelin
            "420",   // gewicht medium
            "520",   // gewicht gross


            //nährwerte pro 100g
            "128",// kCal, / 52,5  47
            "7.7", //Carbs,  5
            "8.9 ", //Eiweiss, 7.4   1
            "2.4", // Fett",  2.5  3

            "Bestehend aus 40% Lachs, 40% Kartoffeln und 20% Gemüse"


        ];


        var pic = "imagenes\\" + document.getElementById(sectionid).value + ".png";
        document.getElementById(imageid).src = pic.replace();
        document.getElementById(imageid).style.display = 'block';

        for (index = 0; index < products.length; ++index) {

            if (mealsize == "klein") {

                var st= "Portion: "+ products[index + 8 ]+"g, " + "kCal: " + ((products[index + 8 ]/100) *products[index + 11 ]).toFixed(1)+ ", " + "Carbs: " +((products[index + 8]/100) * products[index + 12 ]).toFixed(1) + "g, "
                    + "Eiweiss : " +((products[index + 8 ]/100) * products[index + 13 ]).toFixed(1)+"g, " + "Fett: " + ((products[index + 8 ]/100) *products[index + 14 ]).toFixed(1)+"g";

                if (products[index] == document.getElementById(sectionid).value) {

                    document.getElementById(textid).innerText = st.toString();


                }
            }

            if (mealsize == "medium") {


                var st= "Portion: "+ products[index + 9 ]+"g, " + "kCal: " + ((products[index + 9 ]/100) *products[index + 11 ]).toFixed(1)+ ", " + "Carbs: " +((products[index + 9]/100) * products[index + 12 ]).toFixed(1) + "g, "
                    + "Eiweiss : " +((products[index + 9 ]/100) * products[index + 13 ]).toFixed(1)+"g, " + "Fett: " + ((products[index + 9 ]/100) *products[index + 14 ]).toFixed(1)+"g";

                if (products[index] == document.getElementById(sectionid).value) {

                    document.getElementById(textid).innerText = st.toString();

                    // document.getElementById(textid).innerText = (products[index + 6]).toString();
                    // document.getElementById(text).style.display = 'initial';
                    // document.getElementById(textid).style.border.co;
                }
            }


            if (mealsize == "gross") {

                var st= "Portion: "+ products[index + 10 ]+"g, " + "kCal: " + ((products[index + 10 ]/100) *products[index + 11 ]).toFixed(1)+ ", " + "Carbs: " +((products[index + 10]/100) * products[index + 12 ]).toFixed(1) + "g, "
                    + "Eiweiss : " +((products[index + 10 ]/100) * products[index + 13 ]).toFixed(1)+"g, " + "Fett: " + ((products[index + 10 ]/100) *products[index + 14 ]).toFixed(1)+"g";

                if (products[index] == document.getElementById(sectionid).value) {

                    document.getElementById(textid).innerText = st.toString();

                    // document.getElementById(textid).innerText = (products[index + 6]).toString();
                    // document.getElementById(text).style.display = 'initial';
                    // document.getElementById(textid).style.border.co;
                }
            }


        }
    }


</script>
