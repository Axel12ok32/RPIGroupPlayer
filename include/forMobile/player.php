<?php
  $radio_select = $radio_code[$_GET['play']];
?>
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
    <link rel="stylesheet" href="css/player.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
  <body id="body" class="rpi_mbody" style="background: black;">
    <div class="rpi_mcontainer">
      <div class="nav">
        <a data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="menu"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>
        <div class="title" style="font-size: 20px; cursor: pointer;" onclick="location.href='<?php echo $homepage; ?>';">
          RPIGroup
        </div>
        <?php include "./include/offcanvas.php"; ?>
      </div>
      <div class="rpi_background" style="background: url('<?php echo $radio_logo[$radio_select]; ?>');"></div>
      <div class="rpi_mfaderpage transition-fade">
        <div class="rpi_logoradio">
          <img src="<?php echo $radio_logo[$radio_select]; ?>" alt="logo radio">
          <p class="rpi_title"><?php echo $radio_select; ?></p>
          <p class="rpi_artist"><?php echo $radio_slogan[$radio_select]; ?></p>
        </div>
        <a id="buttonPlayer"onclick="play_audio('play')">
          <i class="material-icons" id="play-pause">play_arrow</i>
        </a>
      </div>
      <audio src="<?php echo $radio_stream[$radio_select]; ?>" class="player"></audio>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
