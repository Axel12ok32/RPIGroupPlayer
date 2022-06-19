<?php
  // File Configurazione sito
  require "include/config.php";

  // Check Device
  if(isMobileDevice() or isset($_GET['player']) or isset($_GET['play'])) {
    if (isset($_GET['play'])) {
      require "include/player.php";
    }else{
      require "include/mobile.php";
    }
  }else{
    require "include/desktop.php";
  }
?>
