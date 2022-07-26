<!DOCTYPE html>
<html lang="it">
  <head>
    <title><?php echo $title_site; ?></title>    
    <meta name="description" content="<?php echo $description_site; ?>">
    <meta name="application-name" content="<?php echo $title_site; ?>">
    <link rel="icon" type="image/png" href="<?php echo $logo_site; ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow">    
    <meta name="mobile-web-app-capable" content="yes">
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
        if($_GET['playerDesktop']){
          $radio_value = $radio_code[$_GET['playerDesktop']];
            ?>
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">Caricamento...</div>
                <iframe src="<?php echo $radio_iframe[$radio_value]; ?>" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:calc(100% - 60px);width:100%;position:absolute;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>
            <?php
        }else{
            ?>
                <div class="rpi_mfaderpage">
                    <!-- contenuto -->
                    <div class="header">
                        <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
                        <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
                    </div>
                    <div class="content">
                        <h3>Seleziona la radio che vuoi ascoltare</h3>
                        <br>
                        <div class="row">
                          <?php
                            $radio_code_numbers = count($radio_code);
                            echo $radio_code_numbers;
                            $countradio = 0;
                            while($countradio < $radio_code_numbers){
                              $countradio++;
                              $radio_select = $radio_code[$countradio];
                              ?>
                                <div class="col">
                                  <a href="?playerDesktop=<?php echo $countradio; ?>">
                                    <img src="<?php echo $radio_logo[$radio_select]; ?>" alt="" style="width: 100%; border-radius: 15px;">
                                  </a>
                                </div>
                              <?php
                            }
                          ?>
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
  </body>
</html>
