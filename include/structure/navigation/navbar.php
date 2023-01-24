<div class="nav">
    <a data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </a>
    <div class="title title-extra" onclick="location.href='<?php echo $homepage; ?>';">
        RPIGroup
    </div>
    <div class="offcanvas offcanvas-start rpi_menu" tabindex="-1" id="menu" aria-labelledby="menuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="menuLabel">RPIGroup</h5>
            <button type="button" class="rpi_btn_close" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
        </div>
        <div class="offcanvas-body">
            <a href="<?php echo $homepage; ?>">Home Page</a>
            <br>
            <p><b>Radio Web/FM</b></p>
            <a href="<?php echo $ascolta[1]; ?>">RDL Radio Diffusione Libera</a>
            <a href="<?php echo $ascolta[2]; ?>">Radio Città 105</a>
            <br>
            <!-- <p><b>Radio Tematiche</b></p> -->
            <!-- <a href="<?php // echo $ascolta[3]; ?>">RDL XMAS</a> -->
            <!-- <br> -->                                                   <!-- Al momento, non attivo -->
            <!-- <p><b>Radiovisione Web</b></p> -->                         <!-- Al momento, non attivo -->
            <!-- <a href="<?php // echo $visualizza[1]; ?>">RDL WebTV</a> -->  <!-- Al momento, non attivo -->
            <!-- <a href="<?php // echo $visualizza[2]; ?>">RC105 TV</a> -->   <!-- Al momento, non attivo -->
            <br>
            <a href="?about=contatti">Hai bisogno di aiuto?</a>
            <!-- <a href="" target="_blank">Facebook</a>
            <a href="" target="_blank">Instagram</a> -->
            <div class="offcanvas_footer" style="position: absolute; bottom: 25px; font-size: 0.75rem; color: #ffffffaa;">
                <a onclick="location.href='?about=chisiamo'" style="cursor: pointer;">Cosa è RPIGroup Play?</a> • <a onclick="location.href='?about=comeascoltarci'" style="cursor: pointer;">Come funziona l'app</a><br>
                Versione App: <?php echo $version_app; ?> • <a onclick="location.href='?about=changelog'" style="cursor: pointer;">Changelog</a>
            </div>
        </div>
    </div>
</div>