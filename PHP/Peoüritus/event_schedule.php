<?php
require($_SERVER["DOCUMENT_ROOT"]."/config.php");
global $yhendus;

$kask = $yhendus->prepare("SELECT id, sündmus, aeg FROM peokava ORDER BY aeg ASC");

$kask->bind_result($id, $syndmus, $aeg);

$kask->execute();

?>

<h2>Ajakava</h2>

<hr>

<div class="publicEventForm">

    <?php while($kask->fetch()) { ?>

        <div>

            <form>

                <div>

                    <?php echo date('H:i', strtotime($aeg)); ?>

                </div>

                <div>

                    <?php echo htmlspecialchars($syndmus); ?>

                </div


            </form>

        </div>

        <hr>

    <?php } ?>
    
</div>