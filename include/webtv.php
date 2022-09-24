<?php
  $radio_select = $radio_code[$_GET['tv']];
?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <?php include "./include/metatag.php"; ?>
  </head>
  <body id="body" class="rpi_mbody">
    <div class="rpi_mpreloader" id="preloader">
      <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
    </div>
    <div class="rpi_mcontainer">
      <div class="nav">
        <a data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="menu"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>
        <div class="title" style="font-size: 20px; cursor: pointer;" onclick="location.href='<?php echo $homepage; ?>';">
          RPIGroup
        </div>
        <?php include "offcanvas.php"; ?>
      </div>
        <div id="swup"  class="rpi_mfaderpage transition-fade">
            <!-- contenuto -->
            <div class="header">
                <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
                <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
            </div>
            
            <div class="content">
                <h3><?php echo $radio_select; ?> WEB TV</h3>
                <br>
                <p>È in sviluppo! Ma lo rendiamo pubblico per voi!</p>
            </div>
            
            
            <div class="rpi_mfooter">
            App powered by A.S.V. Studios APPS
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script type="text/javascript">
      import Swup from 'swup';
      const swup = new Swup(); // only this line when included with script tag
    </script>
  </body>
</html>
