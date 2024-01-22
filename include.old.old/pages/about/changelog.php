<div class="content changelog-extra">
    <h3>CHANGELOG</h3>
    <p>Cosa c'è di nuovo su RPIGroup Play?</p>
    <?php
        foreach($changelog->version as $version){
            echo "<hr style=\"margin: 35px 0px;\">";
            echo "<p style=\"padding-top: 0px;\"><b>Versione ".$version->number."</b></p>";
            foreach($version->logs->log as $log_print){
                echo "<p style=\"padding-top: 0px; text-align: left;\">• ".$log_print."</p>";
            }
        }
    ?>
</div>