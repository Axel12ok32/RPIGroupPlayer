<!DOCTYPE html>
  <html lang="it">
  <head>
    <?php include "./include/metatag.php"; ?>
  </head>
  <body id="body" class="rpi_mbody">
    <div class="rpi_mpreloader" id="preloader">
      <img src="img/RpiGroupPlayWHITE.png" alt="Logo">
    </div>
    <div class="rpi_mcontainer">
      <div class="nav">
        <a data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="menu">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </a>
        <div class="title title-extra" onclick="location.href='<?php echo $homepage; ?>';">
          RPIGroup
        </div>
        <?php include "./include/offcanvas.php"; ?>
      </div>
      <?php
      if($_GET['playerDesktop']){
        $radio_value = $radio_code[$_GET['playerDesktop']];
        ?>
        <div class="loader_iframe">Caricamento...</div>
        <iframe src="<?php echo $radio_iframe[$radio_value]; ?>" class="iframe-extra" frameborder="0"></iframe>
        <?php
      }else{
        ?>
        <div class="rpi_mfaderpage">
          <div class="header header-extra">
            <img src="img/RpiGroupPlayWHITE.png" alt="Logo">
            <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
          </div>
          <div class="content">
            <h3>Seleziona la radio che vuoi ascoltare</h3>
            <br>
            <div class="row">
              <?php
              $radio_code_numbers = count($radio_code);
              $countradio = 0;
              while($countradio < $radio_code_numbers){
                $countradio++;
                $radio_select = $radio_code[$countradio];
                ?>
                <div class="col-6 radio_select-homescreen">
                  <a href="<?php echo $ascolta[$countradio]; ?>">
                    <img src="<?php echo $radio_logo[$radio_select]; ?>" alt="radio logo">
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
