<?php

echo "<h1>Tervitused</h1>";

//if-ifelse-else
$h = 30;
echo $h . "<br>";
if ($h < 10) {
    echo "Tunni algus<br>";
} else if ($h < 30) {
    echo "Tunni esimene pool<br>";
} else if ($h > 50) {
    echo "Tunni lõpp<br>";
} else {
    echo "Tunni teine pool<br>";
}

//switch case
$h = 13;
switch ($h) {
    case '12':
        echo "1/5 tund<br>";
        break;
    case '24':
        echo "2/5 tund<br>";
        break;
}


//loops
echo "<h5><br>WHILE loop</h5>";
$counter = 1;
while ($counter <= 5) {
    echo "Tere $counter. matkaja <br>";
    $counter++;
}

echo "<h5><br>DO WHILE loop</h5>";
$counter = 1;
do {
    echo "Tere $counter. matkaja <br>";
    $counter++;
} while ($counter <= 2);

echo "<h5><br>FOR loop</h5>";
for($i = 1; $i <= 5; $i++) {
    echo "Tere $i. matkaja <br>";
}

echo "<h5><br>FOR EACH loop</h5>";
$numbers = [1,2,3,4,5];
foreach($numbers as $index => $number) {
    echo "$index) Tere $number. matkaja <br>";
}


echo "<h5><br>Fizz Buzz FizzBuzz</h5>";
for($i = 1; $i <= 250; $i++) {
    $result;
    if ($i % 3 == 0 && $i % 5 == 0) {
        $result = "FizzBuzz";
    } elseif ($i % 3 == 0) {
        $result = "Fizz";
    } elseif ($i % 5 ==0) {
        $result = "Buzz";
    } else {
        $result = $i;
    }
    if ($i % 16 == 0) { $result .= "<br>";}
    echo "$result ";
}

?>