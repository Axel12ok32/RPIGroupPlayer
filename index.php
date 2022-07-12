<?php
  // File Configurazione sito
  require "include/config.php";

  // Check Device
  if(isMobileDevice()) {
    if(isset($_GET['play'])){
      require "include/player.php";
    }else{
      require "include/mobile.php";
    }
  }else{
    if(isset($_GET['playerDesktop'])){
      require "include/playerDesktop.php";
    }else{
      require "include/desktop.php";
    }
  }
?>
