<?php declare(strict_types=1);

function addNumbers(int $a, int $c, int $b=7) : int {
    return $a + $b + $c;
}
function testTagastuseta() {
    echo "Ei tagasta midagi<br>";
}

echo addNumbers(5, 6, 7)."<br>";
echo addNumbers(5, 8)."<br>";
testTagastuseta();

//viiteta parameeter
$number = 5;
function noRef(int $number) {
    $number *= $number;
    echo "$number in noRef<br>";
}

function hasRef(int &$refToNumber) {
    $refToNumber *= $refToNumber;
    echo "$refToNumber in hasRef<br>";
}

noRef($number);
echo "$number after noRef<br>";
hasRef($number);
echo "$number after hasRef<br>";
?>