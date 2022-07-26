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
  <body class="rpi_dbody">
    <div class="rpi_dbox">
      <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
      <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
      <hr>
      ascolta le nostre emittenti con la nostra nuova app disegnata per smartphone (e non...)
      <hr>
      <button class="rpi_dbtn" type="button" name="button" onclick="window.open('<?php echo $thisurl; ?>?playerDesktop','popUpWindow','height=600,width=385,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no, status=yes');">ASCOLTA RPIGRPUP PLAY</button>
    </div>
    <div class="rpi_dfooter">
      App powered by A.S.V. Studios APPS
    </div>
  </body>
</html>