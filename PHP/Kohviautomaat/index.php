<?php
require($_SERVER["DOCUMENT_ROOT"]."/config.php");
global $yhendus;

require("header.php");
?>

<div class ="w-75 p-3" id="index">

<?php
if(isset($_GET["page"])){
    $openPage = $_GET["page"].".php";
    if (file_exists($openPage)) {
        require($openPage);
    } else {
        require("error404.php");
    }
    
} else {
    require("automaat.php");
}
?>

</div>

<?php

require("footer.php");

?>