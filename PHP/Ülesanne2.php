<?php
// Ülesanne 2, Annabel Jakubel, 03.09.2023

//tehted
$x = 10;
$y = 4;

echo $x . " + " . $y . " = " . $x + $y . "\n";
echo $x . " - " . $y . " = " . $x - $y . "\n";
echo $x . " * " . $y . " = " . $x * $y . "\n";
echo $x . " / " . $y . " = " . $x / $y . "\n";
echo $x . " % " . $y . " = " . $x % $y . "\n";

//teisendus
$mmVäärtus = 546;
$cmVäärtus = $mmVäärtus / 10;
$mVäärtus = $cmVäärtus / 1000;

$teisendus = sprintf("mm on %0.2fcm ning %0.2fm.", $cmVäärtus, $mVäärtus);
echo "\n" . $mmVäärtus . $teisendus . "\n";

//kolmnurk
$a = 10;
$b = 12;
$c = 21;

$ümbermõõt = $a + $b + $c;
$pindala = ($a * $b) / 2;

$mõõdud = sprintf("Antud on kolmnurk mille külgede pikkused on %dcm, %dcm ja %dcm.", $a, $b, $c );
$tulemused = sprintf("Selle kolmnurga ümbermõõt on %dcm ning pindala on %dcm².", $ümbermõõt, $pindala);
echo "\n" . $mõõdud . "\n" . $tulemused;


?>