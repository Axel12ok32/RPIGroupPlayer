<?php include "./include/structure/headPages.php"; ?>

    <h3 class="home-selectTitle">Seleziona la radio</h3>
    <div class="row g-2">
        <?php
            foreach($radiolist->station as $station){
                ?>
                <div class="col-6">
                    <a href="./?play=<?php echo $station->id; ?>">
                        <img src="<?php echo $station->logo; ?>" alt="<?php $station->name;?>" style="width: 100%; border-radius: 10px;">
                    </a>
                </div>
                <?php
            }
        ?>
    </div>

<?php include "./include/structure/footerPages.php"; ?>
