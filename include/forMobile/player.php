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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
      .rpi_background{
        background: url('<?php echo $radio_logo[$radio_select]; ?>');
        filter: blur(5px);
        -webkit-filter: blur(5px);
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 0;
        width: 100%;
        height: calc(100% - 60px);
        background-size: cover;
        opacity: .5;
        background-position: center center;
      }
      .rpi_mfaderpage{
        color: white;
        position: absolute;
        z-index: 1;
        width: 100%;
        height: calc(100vh - 60px);
        top: 60px;
      }
      .rpi_mfaderpage > .rpi_logoradio{
        width: 80%;
        position: inherit;
        top: 45px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 15px;
      }
      .rpi_mfaderpage > p{
        position: relative;
        top: 400px;
        text-align: center;
        text-shadow: 0px 2px 3px #000;
      }
      p.rpi_title{
        font-size: 1.35rem;
        font-weight: 600;
        text-transform: uppercase;
      }
      p.rpi_artist{
        font-size: 1.15rem;
        margin-top: -15px;
      }
      .rpi_mfaderpage > a{
        position: inherit;
        text-align: center;
        color: white;
        bottom: 50px;
        left: 50%;
        transform: translateX(-50%);
        border: 3px solid white;
        padding: 12px 12px 6px 12px;
        border-radius: 100%;
      }
      .rpi_mfaderpage > a > i{
        font-size: 35px;
      }
    </style>
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
      <div class="rpi_background"></div>
      <div class="rpi_mfaderpage transition-fade">
        <img src="<?php echo $radio_logo[$radio_select]; ?>" alt="logo radio" class="rpi_logoradio">
        <p class="rpi_title"><?php echo $radio_select; ?></p>
        <p class="rpi_artist"><?php echo $radio_slogan[$radio_select]; ?></p>
        <a>
          <i class="material-icons">play_arrow</i>
        </a>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
