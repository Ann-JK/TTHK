<?php
require($_SERVER["DOCUMENT_ROOT"]."/config.php");
global $yhendus;

if (isset($_POST["kustutus"])) {

    $id_kustutamiseks = $_POST["kustutus"];

    $kustutamise_kask = $yhendus->prepare("DELETE FROM pidulised WHERE id = ?");

    $kustutamise_kask->bind_param("i", $id_kustutamiseks);
    
    if ($kustutamise_kask->execute()) {

        echo "<div class='alert alert-success'>Külalise kustutamine nimekirjast õnnestus</div>";

    } else {

        echo "<div class='alert alert-danger'>Külalise kustutamine nimekirjast ebaõnnestus</div>";
    }
    $kustutamise_kask->close();
}

$kask = $yhendus->prepare("SELECT id, eesnimi, perekonnanimi, email FROM pidulised");
$kask->bind_result($id, $eesnimi, $perekonnanimi, $email);
$kask->execute();
?>

<h2>ADMIN</h2>

<h4>Külaliste haldus</h4>

<br>

<div class="guestForm">
    <?php while($kask->fetch()) { ?>

        <div>

            <form method="post">

                <div>

                    Eesnimi: <?php echo htmlspecialchars($eesnimi); ?>

                </div>

                <div>

                    Perekonnanimi: <?php echo htmlspecialchars($perekonnanimi); ?>

                </div>

                <div>

                    E-mail: <?php echo htmlspecialchars($email); ?>

                </div>

                <div>

                    <button type="submit" name="kustutus" value="<?php echo $id; ?>" class='btn btn-danger'>Kustuta</button>

                </div>

                <br>

            </form>

        </div>

    <?php } ?>
    
</div>