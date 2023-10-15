<?php
session_start();
require($_SERVER["DOCUMENT_ROOT"]."/config.php");
global $yhendus;

if (isset($_POST['submitGuest'])) {

    $eesnimi = $_POST["eesnimi"];

    $perekonnanimi = $_POST["perekonnanimi"];

    $email = $_POST["email"];

    $kask = $yhendus->prepare("INSERT INTO pidulised (eesnimi, perekonnanimi, email) VALUES (?, ?, ?);");

    $kask->bind_param("sss", $eesnimi, $perekonnanimi, $email);

    if ($kask->execute()) {

        echo "<div class='alert alert-success'>Registreerumine õnnestus!</div>";
        
    }
}
?>

<h2>Registreeru</h2>

<hr>


<form class="submitForm" method="POST" action="">

    <div class="form-item">

        <label for="eesnimi" class="form-label">Eesnimi</label>

        <input type="text" class="form-control" id="eesnimi" name="eesnimi" placeholder="Sisesta eesnimi" required>

    </div>
    
    <br>

    <div class="form-item">

        <label for="perekonnanimi" class="form-label">Perekonnanimi</label>

        <input type="text" class="form-control" id="perekonnanimi" name="perekonnanimi" placeholder="Sisesta perekonnanimi" required>

    </div> 
    
    <br>

    <div class="form-item">

        <label for="email" class="form-label">Emailiaadress</label>

        <input type="email" class="form-control" id="email" name="email" placeholder="Sisesta emailiaadress" required>

    </div>
    
    <br>

    <div class="form-item">

        <button type="submit" name="submitGuest" class="btn btn-danger">Registreeru</button>

    </div>

</form>