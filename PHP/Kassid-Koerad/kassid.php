<?php

require ($_SERVER["DOCUMENT_ROOT"]."/../config.php");

global $yhendus;

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

<h1>Kasside loetelu</h1>

<?php

while($kask->fetch()){

    echo "<div>".htmlspecialchars($id)."<div>";

    echo "<div style='color: $toon;'>".htmlspecialchars($kassinimi)."</div>";

    echo "<div>".htmlspecialchars($toon)."</div>";

}

?>

</body>

</html>

<?php

$yhendus->close();

?>