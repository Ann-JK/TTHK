<?php

$yhendus=new mysqli("localhost", "juku", "kala", "d120915sd507750");

$kask=$yhendus->prepare("SELECT id, kassinimi, toon FROM kassid");

$kask->bind_result($id, $kassinimi, $toon);

$kask->execute();

?>

<!doctype html>

<html>

<head>

<title>Kassid</title>

</head>

<body>

<h1>Kassude loetelu</h1>

<?php

if(isSet($_REQUEST["id"])) {
    $kask=$yhendus->prepare("SELECT id, ")
}

while($kask->fetch()){

echo "<div>".htmlspecialchars($kassinimi)."</div>";

echo "<div>".htmlspecialchars($toon)."</div>";

}

?>

</body>

</html>

<?php

$yhendus->close();

?>