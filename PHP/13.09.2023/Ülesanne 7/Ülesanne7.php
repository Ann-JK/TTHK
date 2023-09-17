<?php

    //tervitus
    function greet() {
        return "Tere päiksekesekene!";
    }

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

    //Ristkülikupindala
    function rectangleArea($sideA, $sideB) {
        $area = $sideA * $sideB;
        $roundedArea = round($area, 2);
        return "Ristküliku pindala on $roundedArea cm.";
    }

    //Isikukood
    function processPersonalCode($personalCode) {
        if (strlen($personalCode) != 11) {
            return "Sisestatud isikukood on vale pikkusega.";
        }

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
    
        return "<br>Sugu: $gender <br>Sünnikuupäev: $birthDate<br>";
    }

    //Head mõtted
    function aGoodThought(){
        $subject = array("Varblane", "Kuldkala", "Öökull", "Rebane", "Kodukass");
        $predicate = array("kuulab", "vaatab", "naudib", "nuusutab", "kompab");
        $object = array("raamatut", "lille", "jõevett", "mustikaid", "kukeseeni");

        return "<br>" . $subject[rand(0, 4)] . " " . $predicate[rand(0, 4)] . " " . $object[rand(0,4)] . ".<br>";
    }

    echo generateUsernameAndPassword("KasuTaja");
    echo "<br><br>";
    echo generateRangeWithStep(3,7,3);
    echo "<br><br>";
    echo rectangleArea(3.79, 7.75);
    echo "<br><br>";
    echo processPersonalCode("72008050160");
    echo aGoodThought();
?>