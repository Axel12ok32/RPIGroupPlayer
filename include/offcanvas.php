<div class="offcanvas offcanvas-start rpi_menu" tabindex="-1" id="menu" aria-labelledby="menuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="menuLabel">RPIGroup</h5>
    <button type="button" class="rpi_btn_close" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
  </div>
  <div class="offcanvas-body">
    <a href="<?php echo $homepage; ?>">Home</a>
    <a href="?about=chisiamo">Chi Siamo</a>
    <a href="?about=comeascoltarci">Come funziona l'applicazione</a>
    <a href="?about=contatti">Contatti</a>
    <br>
    <a href="<?php echo $ascolta[1]; ?>">RDL Radio Diffusione Libera</a>
    <a href="<?php echo $ascolta[2]; ?>">Radio Città 105</a>
    <a href="<?php echo $visualizza[1]; ?>">RDL WebTV</a>
    <a href="<?php echo $visualizza[2]; ?>">RC105 TV</a>
    <br>
    <!-- <a href="" target="_blank">Facebook</a>
    <a href="" target="_blank">Instagram</a> -->
    <div class="offcanvas_footer" style="position: absolute; bottom: 25px; font-size: 0.75rem; color: #ffffffaa;">
      Versione App: <?php echo $version_app; ?>
    </div>
  </div>
</div>