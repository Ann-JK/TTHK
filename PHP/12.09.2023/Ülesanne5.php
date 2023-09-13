<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
        // Ülesanne 5, Annabel Jakubel, 03.09.2023

        echo "<h1>Ülesanne 5</h1>";


        echo "<h3>Tüdrukud</h3>";

        $tüdrukuteNimed = array("Renata", "Gerda", "Viktoria", "Eeva", "Marie", "Siiri", "Liisi", "Terese");
        sort($tüdrukuteNimed);
        foreach ($tüdrukuteNimed as $nimi) {
            echo "$nimi <br>";
        }


        echo "<br><h3>Tüdrukud II</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo "$tüdrukuteNimed[$i] <br>";
        }

        $viimaneNimi = end($tüdrukuteNimed);
        echo "<br> $viimaneNimi <br>";

        $suvalineIndeks = array_rand($tüdrukuteNimed);
        $suvalineNimi = $tüdrukuteNimed[$suvalineIndeks];
        echo "<br> $suvalineNimi <br>";


        echo "<br><h3>Autod </h3>";

        $autoMargid = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen",
        "GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz","Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche",
        "Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep","Kia","Buick","Chevrolet","Subaru",
        "Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
        "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac",
        "Toyota","Acura","Toyota","Toyota","Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep",
        "Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW","Honda","Lincoln","Hummer","Acura","Buick","BMW",
        "Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");

        $vinKoodid = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
        "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
        "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
        "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
        "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
        "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
        "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
        "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
        "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
        "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
        "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
        "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
        "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
        "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
        "1N6AA0EDXFN868772", "WBADW3C59DJ422810");

        $autodeArv = count($autoMargid);
        echo "Autode arv: $autodeArv <br>";

        $vinKoodideArv = count($vinKoodid);
        if ($vinKoodideArv == $autodeArv) {
            echo "<br>Massiivid on ühepikkused ($vinKoodideArv ja $autodeArv)<br>";
        } else {
            echo "<br>Massiivid ei ole ühepikkused (VIN koodide massiivi suurus: $vinKoodideArv, automarkide massiivi suurus: $autodeArv)<br>";
        }

        $toyotaCounter = 0;
        $audiCounter = 0;

        foreach($autoMargid as $autoMark) {
            if ($autoMark == "Toyota") {
                $toyotaCounter++;
            } elseif ($autoMark == "Audi") {
                $audiCounter++;
            } else {
                continue;
            }
        }

        echo "<br>Toyota marki autosid on automarkide nimekirjas $toyotaCounter korda.<br>";
        echo "Audi marki autosid on automarkide nimekirjas $audiCounter korda.<br>";

        echo "<br>Järgnevatel VIN-koodidel on märkide arv väiksem kui 17:<br>";
        foreach($vinKoodid as $kood) {
            if (strlen($kood) < 17) {
                echo "$kood <br>";
            } else {
                continue;
            }
        }


        echo "<br><h3>Keskmised palgad</h3>";

        $palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
        $keskmine = array_sum($palgad)/count($palgad);

        echo "2018.a palkade keskmine on $keskmine.<br>";


        echo "<br><h3>Firmad</h3>";

        $firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo",
        "Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");

        echo "<br>Korrastatud firma nimed:<br>";
        sort($firmad);
        foreach($firmad as $firma) {
            if ($firma == end($firmad)) {
                echo "$firma";
            }   else {
                echo "$firma, ";
            }
        }
        echo "<br><br>";

        $otsitavNimi1 = "";
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["otsitavNimi1"])) {

            $otsitavNimi1 = $_POST["otsitavNimi1"];

            if (in_array($otsitavNimi1, $firmad)) {
                unset($firmad[array_search($otsitavNimi1, $firmad)]);
    
                echo "<b>NB!</b> Firma nimed pärast nime $otsitavNimi1 eemaldamist: <br>";
            } else {
                echo "<b>NB!</b> Sisestatud nime ei olnud antud nimekirjas: <br>";
            }

            foreach($firmad as $firma) {
                if ($firma == end($firmad)) {
                    echo "$firma";
                }   else {
                    echo "$firma, ";
                }
            }
            echo "<br><br>";
        }
    ?>

    <a></a>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="otsitavNimi1">Sisesta firma nimi, mida soovid nimekirjast eemaldada, 
            vaid üks on võimalik nimekirjast välja võtta: </label>
        <br>
        <input type="text" id="otsitavNimi1" name="otsitavNimi1"> <!-- Corrected name attribute -->
        <button type="submit">Sisesta</button>
    </form>

    <?php

        echo "<br>";

        echo "<br><h3>Riigid</h3>";

        $riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
        "Philippines","Canada","Philippines","South Sudan","Brazil",
        "Democratic Republic of the Congo","Indonesia","Syria","Sweden",
        "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
        "Kazakhstan","Cuba","Portugal","Czech Republic");

        $pikimRiiginimi = "";
        foreach ($riigid as $riik) {
            if (strlen($riik) > strlen($pikimRiiginimi)) {
                $pikimRiiginimi = $riik;
            }
        }
        $märkideArv = strlen($pikimRiiginimi);

        echo "Kõige pikema riigi nime ($pikimRiiginimi) märkide arv on $märkideArv.<br>";


        echo "<br><h3>Hiina nimed</h3>";

        $hiinaNimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
        "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
        "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");

        sort($hiinaNimed);

        echo "Esimene nimi: $hiinaNimed[0] <br>Viimane nimi: " . end($hiinaNimed) . "<br>";


        echo "<br><h3>Google</h3>";

        $perekonnanNimed = array("Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","
        Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
        "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
        "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
        "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");
        
        $otsitavNimi2 = "";
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["otsitavNimi2"])) {

            $otsitavNimi2 = $_POST["otsitavNimi2"];

            $sõnum = "";
            if (in_array($otsitavNimi2, $perekonnanNimed)) {
                $sõnum = $otsitavNimi2 . " on nimekirjas olemas!";
            } else {
                $sõnum = $otsitavNimi2 . " ei ole nimekirjas...";
            }

            echo "<div class='alert alert-info' role='alert'>" . $sõnum . "</div>";
        }
    ?>

    <a></a>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="otsitavNimi2">Sisesta perekonnanimi, mida soovid otsida: </label>
        <br>
        <input type="text" id="otsitavNimi2" name="otsitavNimi2">
        <button type="submit">Sisesta</button>
    </form>

    <?php
        echo "<br><h3>Pildid</h3>";

        $pildiKaust = "img/";
        $piltideMassiiv = [];


        if ($handle = opendir($pildiKaust)) {
            while (false !== ($fail = readdir($handle))) {
                $failitüüp = strtolower(pathinfo($fail, PATHINFO_EXTENSION));
                if ($failitüüp == "webp") {
                    array_push($piltideMassiiv, $fail);
                }   
            }
        }   
        closedir($handle);

        echo "Kuvatud kolmas pilt massiivist: <br>";
        echo "<br><img src='" . $pildiKaust . $piltideMassiiv[2] . "' alt='" . $piltideMassiiv[2] . "' width='150' height='150'><br>";

        echo "<br>Kuvatud kõik pildid massiivist: <br><br>";
        foreach ($piltideMassiiv as $pilt) {
            echo "<img src='" . $pildiKaust . $pilt . "' alt='" . $pilt . "' width='150' height='150'>";
        }
        echo "<br>";

        
        echo "<br>Kuvatud kõik pildid bootstrapi abil kuues veerus: <br><br>";
        echo '<div class="row">';

        foreach ($piltideMassiiv as $pilt) {
            echo '<div class="col-md-2 mb-3">';
            echo '<img src="' . $pildiKaust . $pilt . '" class="img-fluid" alt="Image">';
            echo '</div>';
        }
    
        echo '</div>';
    ?>
    </body> 
</html>
