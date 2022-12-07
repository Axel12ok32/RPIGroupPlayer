<?php
  $radio_select = $radio_code[$_GET['tv']];
?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <?php include "./include/metatag.php"; ?>
    <link href="css/video.css" rel="stylesheet">
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
    <style>
      .video-js{
        height: 100vh !important;
        position: fixed;
        top: 0;
        z-index: 1;
      }
      .video-js .vjs-big-play-button{
        top: 50% !important;
        left: 50% !important;
        translate: -50% -50% !important;
      }
    </style>
  </head>
  <body id="body" class="rpi_mbody">
    <div class="rpi_mpreloader" id="preloader">
      <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
    </div>
    <?php include "./include/forMobile/downloadappios.php"; ?>
    <div class="rpi_mcontainer">
      <div class="nav" style="position: relative; z-index: 100;">
      <a data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="menu"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>
      <div class="title" style="font-size: 20px; cursor: pointer;" onclick="location.href='<?php echo $homepage; ?>';">
        RPIGroup
      </div>
      <?php include "offcanvas.php"; ?>
      </div>
      <video id="hls" class="video-js vjs-fluid vjs-default-skin" controls preload="auto" data-setup='{"autoplay": true}'>
        <source src="<?php echo $radio_stream_video[$radio_select]; ?>" type="application/x-mpegURL">
      </video>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script type="text/javascript">
      import Swup from 'swup';
      const swup = new Swup(); // only this line when included with script tag

      var player = videojs('hls');
      player.play();
    </script>
  </body>
</html>
