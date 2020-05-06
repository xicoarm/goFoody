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

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

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
            "17.90", //preis für mid shop 13.70
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

            "Bestehend aus 40% Lachs, 40% Kartoffeln und 20% Gemüse",





            "Rindfleisch mit Kartoffeln und grünen Bohnen",
            "Zartes Rindfleisch begleitet von Ofenkartoffeln und saftigen grünen Bohnen. Gemüse al dente zubereitet, um die Nähstoffe beizubehalten.",

            "12.90", //preis für klein shop 12.20
            "15.90", //preis für mid shop 13.70
            "18.80", //preis für gross shop 18.90

            "12.00", //preis für klein PLAN 11.00
            "15.00", //presi med PLAN   14.00
            "18.00",   // p gross PLAN     17.00

            "350",   // gewicht kelin
            "450",   // gewicht medium
            "550",   // gewicht gross


            //nährwerte pro 100g
            "121",// kCal, / 52,5  47
            "16.1", //Carbs,  5
            "11.2 ", //Eiweiss, 7.4   1
            "3.4", // Fett",  2.5  3

            "Bestehend aus 40% Lachs, 40% Kartoffeln und 20% Gemüse",


            "Pouletbrust mit Reis, Gemüse und Sojasauce",
            "Ein Klassiker im Ofen vorbereitet und begleitet von einer Gemüsemischung (Zwiebeln, roter und grüner Paprika).",

            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "131",// kCal,
            "14.2", //Carbs,
            "13", //Eiweiss,
            "1.7", // Fett",

            "Bestehend aus 40% Lachs, 40% Kartoffeln und 20% Gemüse",




            "Garnelen mit Reis, Gemüse und Sojasauce",
            "Eine perfekte Kombination von Aromen im Ofen zubereitet und Begleitet von Zwiebeln, rotem und grünem Paprika.",

            "13.90", //preis für klein shop 12.20
            "16.90", //preis für mid shop 13.70
            "19.80", //preis für gross shop 18.90

            "13.00", //preis für klein PLAN 11.00
            "16.00", //presi med PLAN   14.00
            "19.00",   // p gross PLAN     17.00

            "330",   // gewicht kelin
            "420",   // gewicht medium
            "520",   // gewicht gross


            //nährwerte pro 100g
            "114",// kCal, / 52,5  47
            "16.6", //Carbs,  5
            "10.4 ", //Eiweiss, 7.4   1
            "0.9", // Fett",  2.5  3

            "Bestehend aus 40% Lachs, 40% Kartoffeln und 20% Gemüse",



            "Schweinefleisch mit Kartoffeln und Champignons",
            "Gebratenes Schweinefleisch mit Bratkartoffeln und Champignons gewürzt à la Foody.",


            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "102.4",// kCal,
            "8.7", //Carbs,
            "9.9", //Eiweiss,
            "1.8", // Fett",


            "Bestehend aus 40% Lachs, 40% Kartoffeln und 20% Gemüse",



            "Rindsburger mit Basmatireis und Gemüse",
            "Rindsburger (Rindfleisch, Karotten und Kartoffeln) begleitet von einer Gemüsemischung bestehend aus Brokkoli, Erbsen, Zucchetti, Kefen und grünen Bohnen.",


            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "109",// kCal,
            "12.4", //Carbs,
            "9.1", //Eiweiss,
            "2.3", // Fett",


            "Rindsburger besteht aus 65% Rindfleisch, 10% Karotten, 10% Brott und 15% Kartoffeln",




            "Geschnetzeltes Rindfleisch mit Basmatireis auf Gemüsebouquet",
            "Geschnetzeltes Rindfleisch gekocht mit Basmatireis auf Gemüsebouquet bestehend aus rotem und gelbem Paprika, Brokkoli und Zucchini",


            "16.40", //preis für klein shop 12.20
            "19.40", //preis für mid shop 13.70
            "22.10", //preis für gross shop 18.90

            "15.50", //preis für klein PLAN 11.00
            "18.50", //presi med PLAN   14.00
            "21.50",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "129",// kCal,
            "11.7", //Carbs,
            "12.1", //Eiweiss,
            "3.2", // Fett",


            "Rindsburger besteht aus 65% Rindfleisch, 10% Karotten, 10% Brott und 15% Kartoffeln",




            "Pouletbrust mit Kartoffeln, Champignons und Bohnen",
            "Gekochte Pouletbrust mit Offenkartoffeln, Champignons und Bohnen",


            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "85",// kCal,
            "7.4", //Carbs,
            "11.8", //Eiweiss,
            "0.6", // Fett",


            "Rindsburger besteht aus 65% Rindfleisch, 10% Karotten, 10% Brott und 15% Kartoffeln",



            "Pouletbrust mit Penne und Gemüsevariation",
            "Pouletbrust gekocht mit Penne und Gemüsevariation bestehend aus Erbsen, Brokkoli, Zucchini, grünen Bohnen und Kefen. ",


            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "194",// kCal,
            "29.7", //Carbs,
            "15.3", //Eiweiss,
            "1.3", // Fett",


            "Rindsburger besteht aus 65% Rindfleisch, 10% Karotten, 10% Brott und 15% Kartoffeln",



            "Pouletburger mit Kartoffeln, Champignons und Bohnen",
            "Pouletburger mit Offenkartoffeln, Champignons und Bohnen",


            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "84",// kCal,
            "8.6", //Carbs,
            "7", //Eiweiss,
            "1.5", // Fett",


            "Rindsburger besteht aus 65% Rindfleisch, 10% Karotten, 10% Brott und 15% Kartoffeln",





            "Pouletburger mit Süsskartoffeln und Gemüsevariation",
            "Pouletburger mit Süsskartoffeln begleitet von einer Gemüsevariation bestehend aus Erbsen, Brokkoli, Zucchini, grünen Bohnen und Kefen.",


            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "108",// kCal,
            "13.7", //Carbs,
            "8.5", //Eiweiss,
            "1.2", // Fett",


            "Rindsburger besteht aus 65% Rindfleisch, 10% Karotten, 10% Brott und 15% Kartoffeln",





            "Pouletburger mit Vollkornfusili auf Gemüsebouquet",
            "Pouletburger mit Vollkornfusili auf Gemüsebouquet (bestehend aus rotem und gelbem Paprika, Brokkoli und Zucchini) ",


            "11.90", //preis für klein shop 12.20
            "14.90", //preis für mid shop 13.70
            "17.80", //preis für gross shop 18.90

            "11", //preis für klein PLAN 11.00
            "14", //presi med PLAN   14.00
            "17",   // p gross PLAN     17.00

            //klein-mid-g gramm
            "350",   // p gross PLAN     17.00
            "450",   // p gross PLAN     17.00
            "550",   // p gross PLAN     17.00

            //nährwerte pro 100g
            "199",// kCal,
            "29.3", //Carbs,
            "8.5", //Eiweiss,
            "12.5", // Fett",


            "Rindsburger besteht aus 65% Rindfleisch, 10% Karotten, 10% Brott und 15% Kartoffeln",




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
