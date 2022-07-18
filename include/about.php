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
        <div id="swup"  class="rpi_mfaderpage transition-fade">
            <!-- contenuto -->
            <div class="header">
                <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
                <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
            </div>
            <?php
                if($_GET['about'] == "chisiamo"){
                ?>   
                    <div class="content">
                        <h3>Chi Siamo?</h3>
                        <br>
                        <p style="text-align: justify;">"RPIGroup Play" è la App - per smartphone e computer - ufficiale del gruppo RadioPeopleItaly Group, gestita e realizzata dallo studio A.S.V. Studios.</p>
                        <p style="text-align: justify;">L'applicazione, è stata sviluppata per unire tutte le emittenti radiofoniche del gruppo, in un'unico portale, in grado di aggregare più flussi e trasmetterli all'interno di un singolo contenitore.</p>
                        <br><p style="text-align: justify;">Per conoscere la storia del gruppo, ti consigliamo di chiudere l'app e visionare il nostro sito RPIGroup.it oppure la pagina dedicata sul sito del nostro studio.</p>
                     </div>
                <?php
                }elseif($_GET['about'] == "comeascoltarci"){
                ?>
                    <div class="content">
                        <h3>Come Funziona l'app?</h3>
                        <br>
                        <p style="text-align: justify;">Il funzionamento dell'applicazione, è più semplice del previsto. Tutto ciò che ti serve è una connessione Internet, un browser e il link per accedere alla WebApp.</p>
                        <p style="text-align: justify;"><b>Da COMPUTER</b> ti basterà cliccare sul pulsante "Ascolta RPIGroup Play", per poi selezionare la tua radio preferita.</p>
                        <p style="text-align: justify;"><b>Da SMARTPHONE</b>ti basterà semplicemente selezionare la tua radio preferita, in quanto la webapp capisce perfettamente se sei da smartphone o da computer.</p>
                        <p style="text-align: justify;">Una volta selezionato la propria radio preferita, quello che bisognerà fare è quello di cliccare sul pulsante "Play" per avviare la riproduzione dell'emittente.</p>
                        <br><br>
                        <h4>Come faccio ad aggiornare l'applicazione?</h4>
                        <br>
                        <p style="text-align: justify;">Niente panico! Visto ché si tratta di una applicazione web, gli aggiornamenti sono del tutto automatici. Basterà solo aggiornare la pagina oppure continuare a navigare all'interno dell'app, modo tale da far ricevere le nuove funzionalità automaticamente.</p>
                    </div>
                <?php
                }elseif($_GET['about'] == "contatti"){
                ?>
                    <div class="content">
                        <h3>Contatti</h3>
                        <br>
                        <p>Al momento i contatti non sono disponibili... Attendi il rilascio della prossima versione dell'app.</p>
                    </div>
                <?php
                }else{
                    if(isMobileDevice()){
                        header("Location: /");
                    }else{
                        header("Location: ?playerDesktop");
                    }
                }
            ?>   
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