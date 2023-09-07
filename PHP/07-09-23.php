<?php

//if-ifelse-else
$h = 30;
echo $h . "<br>";

if ($h < 10) {
    echo "Tunni algus";
} else if ($h < 30) {
    echo "Tunni esimene pool";
} else if ($h > 50) {
    echo "Tunni lõpp";
} else {
    echo "Tunni teine pool";
}

//switch case
$h = 13;

switch ($h) {
    case '12':
        echo "1/5 tund";
        break;
    case '24':
        echo "2/5 tund";
        break;
}


//loops

?>