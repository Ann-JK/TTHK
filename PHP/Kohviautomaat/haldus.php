<?php
require($_SERVER["DOCUMENT_ROOT"]."/config.php");
global $yhendus;


if (isset($_POST['submitDrink'])) {

    $jooginimi = $_POST["jooginimi"];

    $topsepakis = $_POST["topsepakis"];

    $topsejuua = 0;

    $kask = $yhendus->prepare("INSERT INTO kohviautomaat (jooginimi, topsepakis, topsejuua) VALUES (?, ?, ?);");

    $kask->bind_param("sss", $jooginimi, $topsepakis, $topsejuua);

    $kask->execute();
}

if (isset($_POST["eventKustuta"])) {

    $id_kustutamiseks = $_POST["eventKustuta"];

    $kustutamise_kask = $yhendus->prepare("DELETE FROM kohviautomaat WHERE id = ?");

    $kustutamise_kask->bind_param("i", $id_kustutamiseks);
    
    $kustutamise_kask->execute();
    
    $kustutamise_kask->close();
}

if (isset($_POST["eventTaida"])) {

    $id_taitmiseks = $_POST["eventTaida"];

    $taitmise_kask = $yhendus->prepare("UPDATE kohviautomaat SET topsejuua = topsejuua + topsepakis WHERE id = ?");
    
    $taitmise_kask->bind_param("i", $id_taitmiseks);
    
    $taitmise_kask->execute();

    $taitmise_kask->close();
}

$kask = $yhendus->prepare("SELECT id, jooginimi, topsepakis, topsejuua FROM kohviautomaat");

$kask->bind_result($id, $jooginimi, $topsepakis, $topsejuua);

$kask->execute();

?>

<h2>Haldus</h2>

<hr>

<form method="POST" action="">

    <div class="form-group">

        <label for="jooginimi" class="form-label">Joogi nimi</label>

        <input type="text" class="form-control" id="jooginimi" name="jooginimi" placeholder="Sisesta joogi nimi" style="max-width: 200px" required>

    </div>
    
    <div class="form-group">

        <label for="topsepakis" class="form-label">Täitepaki suurus</label>

        <input type="number" class="form-control" id="topsepakis" name="topsepakis" style="max-width: 85px" required>

    </div> 


    <div class="form-group">

        <button type="submit" name="submitDrink">Lisa jook</button>

    </div>

</form>

<hr>

<h5><u>Inventuur</u></h5>

<br>

<div class="inventoryForm">

   <?php while ($kask->fetch()) { ?>

    <div>

        <form method="POST" action="">

            <div class="container">

                <div class="row">

                    <div class="col-md-2 larger-text">

                        <?php echo htmlspecialchars($jooginimi);?>
                        <?php echo htmlspecialchars($topsejuua);?>

                    </div>

                    <div class="col-md-2">

                        <button type="submit" name="eventTaida" value="<?php echo $id; ?>">Täida</button>
                        <button type="submit" name="eventKustuta" value="<?php echo $id; ?>">Kustuta</button>

                    </div>

                </div>

            </div>

        </form>

        <br>

    </div>
    
    <?php } ?>

</div>