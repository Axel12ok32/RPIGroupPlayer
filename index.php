<?php
  // File Configurazione sito
  require "include/config.php";

  // Check Device
  if (isMobileDevice() or isset($_GET['player'])) {
    require "include/mobile.php";
  }else {
    require "include/desktop.php";
  }
?>
