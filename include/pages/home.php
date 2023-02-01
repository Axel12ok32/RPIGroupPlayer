<?php include "./include/structure/single-page-start.php"; ?>

<div class="content">
    <h3>Seleziona la radio che vuoi ascoltare</h3>
    <br>
    <div class="row">
        <?php
            foreach($radiolist->station as $station){
                ?>
                <div class="col-6" style="margin-bottom: 15px;">
                    <a href="./?play=<?php echo $station->id; ?>">
                        <img src="<?php echo $station->logo; ?>" alt="<?php $station->name;?>" style="width: 100%; border-radius: 10px;">
                    </a>
                </div>
                <?php
            }
        ?>
    </div>
</div>

<?php include "./include/structure/single-page-end.php"; ?>
