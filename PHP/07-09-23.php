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
echo "<br>WHILE loop <br>";
$counter = 1;
while ($counter <= 5) {
    echo "Tere $counter. matkaja <br>";
    $counter++;
}

echo "<br>DO WHILE loop <br>";
$counter = 1;
do {
    echo "Tere $counter. matkaja <br>";
    $counter++;
} while ($counter <= 2);

echo "<br>FOR loop <br>";
for($i = 1; $i <= 5; $i++) {
    echo "Tere $i. matkaja <br>";
}

echo "<br>FOR EACH loop <br>";
$numbers = [1,2,3,4,5];
foreach($numbers as $index => $number) {
    echo "$index) Tere $number. matkaja <br>";
}


echo "<br>FIZZ BUZZ FIZZBUZZ<br>";
for($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br> ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 ==0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}

?>