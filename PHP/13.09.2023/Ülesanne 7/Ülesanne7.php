<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" style="max-width: 1000px">
        <?php
            // Ülesanne 7, Annabel Jakubel, 19.09.2023

            //tervitus
            function greet() {
                return "<h2>Tere päiksekesekene!</h2>";
            }

            echo greet() . "<br>";

            //Liitu uudiskirjaga
            function generateForm() {
                echo '<h5>Liitu uudiskirjaga!</h5>';
                echo '<form action="" method="post">';
                echo '<div class="form-group">';
                echo '<label for="email">Email:</label>';
                echo '<input type="email" class="form-control" id="email" name="email" required>';
                echo '</div>';
                echo '<button type="submit" class="btn btn-primary">Liitu</button>';
                echo '</form>';
                echo '<br><br>';
            }

            $email = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
                $email = $_POST["email"];
                echo '<div class="alert alert-success">Uudiskirjaga liitumine õnnestus!</div>';
            }

            generateForm();

            //Kasutajanimi ja email
            function generateUsernameAndPassword($username) {

                $lowercaseUsername = strtolower($username);
                $email = $lowercaseUsername . "@hkhk.edu.ee";

                $passwordCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

                $password = "";

                for ($i = 0; $i <= 7; $i++) {
                    $index = rand(0, strlen($passwordCharacters) - 1);
                    $password .= $passwordCharacters[$index];
                }

                return "Kasutajanimi: $lowercaseUsername <br>Email: $email <br>Parool: $password";
            }

            echo '<br>';
            echo '<form method="post" action="">';
            echo '<div class=form-group>';
            echo '<label for="username">Sisesta kasutajanimi </label><br>';
            echo '<input type="text" id="username" name="username">';
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary">Sisesta</button>';
            echo '</form>';
            echo '<br>';

            $username = "";
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["username"])) {
    
                $username = $_POST["username"];
                echo '<div class="alert alert-primary" style="max-width: 400px;">' . generateUsernameAndPassword($username) . '</div>';
                echo "<br>";
            }

            //Arvud
            function generateRangeWithStep(int $min, int $max, int $step) {
            $generatedRange = "";
                for ($i = $min; $i <= $max; $i += $step) {
                    if ($i > $max) {
                        break;
                    } elseif ($i == $min) {
                        $generatedRange .= "$i";
                    } else {
                        $generatedRange .= ", $i";
                    }
                }

                return $generatedRange;
            }
            
            echo '<br>';
            echo '<form method="post" action="">';
            echo '<h5>Vali kaks arvu ja nende samm</h5>';
            echo '<div class=form-group>';
            echo '<label for="min">Väikseim number:</label><br>';
            echo '<input type="number" id="min" name="min" required>';
            echo '</div>';
            echo '<div class=form-group>';
            echo '<label for="max">Suurim number: </label><br>';
            echo '<input type="number" id="max" name="max" required>';
            echo '</div>';
            echo '<div class=form-group>';
            echo '<label for="step">Arvudevaheline samm: </label><br>';
            echo '<input type="number" id="step" name="step" required>';
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary">Sisesta</button>';
            echo '</form>';
            echo '<br>';

            $min = "";
            $max = "";
            $step = "";
            if ($_SERVER["REQUEST_METHOD"] === "POST" 
                && isset($_POST["min"]) 
                && isset($_POST["max"])
                && isset($_POST["step"]) ) {
    
                $min = $_POST["min"];
                $max = $_POST["max"];
                $step = $_POST["step"];
                if ($min > $max) {
                    echo '<div class="alert alert-danger" style="max-width: 400px;"> Suurim number ei saa olla väiksem väikseimast.</div>';
                } else {
                    echo '<div class="alert alert-primary" style="max-width: 400px;">' . generateRangeWithStep((int)$min, (int)$max, (int)$step) . '</div>';
                }
                echo "<br>";
            }

            //Ristkülikupindala
            function rectangleArea($sideA, $sideB) {
                $area = $sideA * $sideB;
                $roundedArea = round($area, 2);
                return "Ristküliku pindala on $roundedArea cm.";
            }

            echo '<br>';
            echo '<form method="post" action="">';
            echo '<h5>Sisesta ristküliku küljepikkused (cm)</h5>';
            echo '<div class=form-group>';
            echo '<label for="sideA">Esimene küljepikkus:</label><br>';
            echo '<input type="number" step="0.01" id="sideA" name="sideA" required>';
            echo '</div>';
            echo '<div class=form-group>';
            echo '<label for="sideB">Teine küljepikkus: </label><br>';
            echo '<input type="number" step="0.01" id="sideB" name="sideB" required>';
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary">Sisesta</button>';
            echo '</form>';
            echo '<br>';

            $sideA = "";
            $sideB = "";
            if ($_SERVER["REQUEST_METHOD"] === "POST" 
                && isset($_POST["sideA"]) 
                && isset($_POST["sideB"])) {
    
                $sideA = $_POST["sideA"];
                $sideB = $_POST["sideB"];
                echo '<div class="alert alert-primary" style="max-width: 400px;">' . rectangleArea($sideA, $sideB) . '</div>';
                echo "<br><br>";
            }

            //Isikukood
            function processPersonalCode($personalCode) {
                $genderCode = $personalCode[0];
                $gender = "";

                //allikas: https://et.wikipedia.org/wiki/Isikukood
                if ($genderCode == 1 || $genderCode == 3 || $genderCode == 5 || $genderCode == 7) {
                    $gender = "Mees";
                } elseif ($genderCode == 2 || $genderCode == 4 || $genderCode == 6 || $genderCode == 8) {
                    $gender = "Naine";
                } else {
                    $gender = "Ei ole võimalik määrtata";
                }

                $birthCentury = "";
                if ($genderCode == 1 || $genderCode == 2) {
                    $birthCentury = "18";
                } elseif ($genderCode == 3 || $genderCode == 4) {
                    $birthCentury = "19";
                } elseif ($genderCode == 5 || $genderCode == 6) {
                    $birthCentury = "20";
                } elseif ($genderCode == 7 || $genderCode == 8) {
                    $birthCentury = "21";
                } else {
                    $birthCentury = "xx";
                }

                $birthDate = $personalCode[5] . $personalCode[6] . "." . $personalCode[3] . $personalCode[4] . "." . $birthCentury . $personalCode[1] . $personalCode[2];
            
                return "Sugu: $gender <br>Sünnikuupäev: $birthDate";
            }
            
            echo '<br>';
            echo '<form method="post" action="">';
            echo '<div class=form-group>';
            echo '<label for="username">Sisesta isikukood </label><br>';
            echo '<input type="number" id="personalCode" name="personalCode">';
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary">Sisesta</button>';
            echo '</form>';
            echo '<br>';

            $personalCode = "";
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["personalCode"])) {
    
                $personalCode = $_POST["personalCode"];

                if (strlen($personalCode) != 11) {
                    echo '<div class="alert alert-danger" style="max-width: 400px;">Sisestatud isikukood on vale pikkusega</div>';
                } else {
                    echo '<div class="alert alert-primary" style="max-width: 400px;">' . processPersonalCode($personalCode). '</div>';
                }
                echo "<br>";
            }

            //Head mõtted
            function aGoodThought(){
                $subject = array("Varblane", "Kuldkala", "Öökull", "Rebane", "Kodukass");
                $predicate = array("kuulab", "vaatab", "naudib", "nuusutab", "kompab");
                $object = array("raamatut", "lille", "jõevett", "mustikaid", "kukeseeni");

                return $subject[rand(0, 4)] . " " . $predicate[rand(0, 4)] . " " . $object[rand(0,4)] . ".<br>";
            }

            echo '<br>';
            echo '<form method="post" action="">';
            echo '<h5>Ka soovid ühte head mõtet?<h5>';
            echo '<input type="hidden" name="generateThought" value="true">';
            echo '<button type="submit" class="btn btn-success">Anna üks hea mõte</button>';
            echo '</form>';
            echo '<br>';

            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["generateThought"])) {
                echo '<div class="alert alert-success" style="max-width: 400px;">' . aGoodThought() . '</div>';
            }
        ?>
        </div>

    </body>
</html>