<?php
  //   RPIGroup Play
  //   Realizzato da A.S.V. Studios APPS

  // Versione Applicazione
  $version_app = "0.9.23 Alpha";

  // File Configurazione sito
  require "config.php";

  // Check Device
  if(isMobileDevice()) {
    if(isset($_GET['play'])){
      include "include/forMobile/player.php";
    }elseif(isset($_GET['about'])){
      include "include/about.php";
    }elseif(isset($_GET['tv'])){
      include "include/webtv.php";
    }else{
      include "include/forMobile/index.php";
    }
  }else{
    if(isset($_GET['playerDesktop'])){
      include "include/forDesktop/playerDesktop.php";
    }elseif(isset($_GET['about'])){
      include "include/about.php";
    }elseif(isset($_GET['tv'])){
      include "include/webtv.php";
    }else{
      include "include/forDesktop/index.php";
    }
  }
?>
