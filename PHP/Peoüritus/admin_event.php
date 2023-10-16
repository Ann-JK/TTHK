<?php
require($_SERVER["DOCUMENT_ROOT"]."/config.php");
global $yhendus;

if (isset($_POST['submitEvent'])) {

    $syndmus = $_POST["sündmus"];

    $aeg = $_POST["aeg"];

    $kask = $yhendus->prepare("INSERT INTO peokava (sündmus, aeg) VALUES (?, ?);");

    $kask->bind_param("ss", $syndmus, $aeg);

    if ($kask->execute()) {

        echo "<div class='alert alert-success'>Registreerumine õnnestus!</div>";
        
    }
}

if (isset($_POST["eventKustutus"])) {

    $id_kustutamiseks = $_POST["eventKustutus"];

    $kustutamise_kask = $yhendus->prepare("DELETE FROM peokava WHERE id = ?");

    $kustutamise_kask->bind_param("i", $id_kustutamiseks);
    
    if ($kustutamise_kask->execute()) {

        echo "<div class='alert alert-success'>Sündmuse kustutamine nimekirjast õnnestus</div>";

    } else {

        echo "<div class='alert alert-danger'>Sündmuse kustutamine nimekirjast ebaõnnestus</div>";
    }
    $kustutamise_kask->close();
}

$kask = $yhendus->prepare("SELECT id, sündmus, aeg FROM peokava ORDER BY aeg ASC");

$kask->bind_result($id, $syndmus, $aeg);

$kask->execute();

?>


<h2>ADMIN</h2>

<br>

<h4>Peokava haldus</h4>

<hr>

<h5>Sündmuse lisamine</h5>

<br>

<form class="submitForm" method="POST" action="">

    <div class="form-group">

        <label for="sündmus" class="form-label">Sündmus</label>

        <input type="text" class="form-control" id="sündmus" name="sündmus" placeholder="Sisesta peokava sündmus" required>

    </div>
    
    <div class="form-group">

        <label for="aeg" class="form-label">Algusaeg</label>

        <input type="time" class="form-control" id="aeg" name="aeg" step="60" value="12:00" placeholder="Sisesta sündmuse algusaeg" required>

    </div> 


    <div class="form-group">

        <button type="submit" name="submitEvent" class="btn btn-danger">Lisa sündmus</button>

    </div>

</form>

<br>

<hr>

<h5>Ajakava</h5>

<br>

<div class="eventForm">

    <?php while($kask->fetch()) { ?>

        <div>

            <form method="post">

                <div>

                    Sündmus: <?php echo htmlspecialchars($syndmus); ?>

                </div>

                <div>

                    Algusaeg: <?php echo date('H:i', strtotime($aeg)); ?>

                </div>

                <div>

                    <button type="submit" name="eventKustutus" value="<?php echo $id; ?>" class='btn btn-danger'>Kustuta</button>

                </div>

                <br>

            </form>

        </div>

    <?php } ?>
    
</div>