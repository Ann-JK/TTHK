<?php
require($_SERVER["DOCUMENT_ROOT"]."/config.php");
global $yhendus;

if (isset($_POST["joo"])) {

    $id_muutmiseks = $_POST["joo"];

    $muutmise_kask = $yhendus->prepare("UPDATE kohviautomaat SET topsejuua = topsejuua - 1 WHERE id = ?");

    $muutmise_kask->bind_param("i", $id_muutmiseks);
    
    $muutmise_kask->execute();

    $muutmise_kask->close();
}

$kask = $yhendus->prepare("SELECT id, jooginimi, topsejuua FROM kohviautomaat WHERE topsejuua > 0");
$kask->bind_result($id, $jooginimi, $topsejuua);
$kask->execute();
?>

<h2>Joogiautomaat</h2>

<br>

<div class="container">

    <?php while ($kask->fetch()) { ?>

        <div class="row">

            <div class="col-md-2 larger-text">

                <?php echo htmlspecialchars($jooginimi) . " " . htmlspecialchars($topsejuua); ?>

            </div>

            <div class="col-md-2">

                <form method="POST" action="">

                    <button type="submit" name="joo" value="<?php echo $id; ?>">Joo üks tops</button>

                </form>

            </div>

        </div>
        
        <br>

    <?php } ?>
    
</div>
