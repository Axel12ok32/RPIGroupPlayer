<!DOCTYPE html>
<html lang="it">
  <head>
    <title><?php echo $title_site; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php echo $description_site; ?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="<?php echo $title_site; ?>">
    <link rel="icon" type="image/png" href="<?php echo $logo_site; ?>">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
  <body id="body" class="rpi_mbody">
    <div class="rpi_mpreloader" id="preloader">
      <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
    </div>
    <div class="rpi_mcontainer">
      <div class="nav">
        <a data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="menu"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>
        <div class="title" style="font-size: 20px; cursor: pointer;" onclick="location.href='?playerDesktop';">
          RPIGroup
        </div>
        <?php include "offcanvasDesktop.php"; ?>
      </div>
      <?php
        if($_GET['playerDesktop'] == "1"){
            ?>
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">Caricamento...</div>
                <iframe src="https://www.radiodiffusionelibera.com/?proradio-popup=1" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:90.4%;width:100%;position:absolute;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>
            <?php
        }elseif($_GET['playerDesktop'] == "2"){
            ?>
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">Caricamento...</div>
                <iframe src="https://www.radiocitta105.it/?proradio-popup=1" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:90.4%;width:100%;position:absolute;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>
            <?php
        }else{
            ?>
                <div id="swup"  class="rpi_mfaderpage transition-fade">
                    <!-- contenuto -->
                    <div class="header">
                        <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
                        <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
                    </div>
                    <div class="content">
                        <h3>Seleziona la radio che vuoi ascoltare</h3>
                        <br>
                        <div class="row">
                            <div class="col">
                                <a href="?playerDesktop=1">
                                    <img src="https://i0.wp.com/www.radiodiffusionelibera.com/wp-content/uploads/2017/01/RDL-Facebook.png?fit=370%2C370&ssl=1" alt="RDL" style="width: 100%; border-radius: 15px;">
                                </a>
                            </div>
                            <div class="col">
                                <a href="?playerDesktop=2">
                                    <img src="https://www.radiocitta105.it/wp-content/uploads/2020/06/26168468_1590103344416186_7025872599153073152_n-1.png" alt="RC105" style="width: 100%; border-radius: 15px;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="rpi_mfooter">
                        App powered by A.S.V. Studios APPS
                    </div>
                </div>
            <?php
        }
      ?>
      

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
