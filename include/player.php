<!DOCTYPE html>
<html lang="it">
  <head>
    <title><?php echo $title_site; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Ascolta le radio del gruppo Radiopeopleitaly Group">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="RPIGroup Play">
    <link rel="icon" type="image/png" href="<?php echo $logo_site; ?>">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
  <?php
    $radio_select = $radio_code[$_GET['play']];
  ?>
  <body id="body" class="rpi_mbody" style="background: black;">
    <div class="rpi_mcontainer">
      <div class="nav" style="z-index: 1;position: fixed; width: 100%;">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>
        <div class="title" onclick="?player">
          RPIGroup
        </div>
      </div>
      <div class="rpi_background" style="background: url('<?php echo $radio_logo[$radio_select]; ?>'); position: absolute; top: 0; left: 0; z-index: 0; width: 100%; height: 100%; background-size: cover; opacity: .5; background-position: center center;"></div>
      <div id="swup" class="rpi_mfaderpage transition-fade" style=" color: white;position: absolute;z-index: 1;width: 100%;top: 70px;">
          Ciao
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script type="text/javascript">
      import Swup from 'swup';
      const swup = new Swup(); // only this line when included with script tag
    </script>
  </body>
</html>
