<?php
  //   RPIGroup Play
  //   Realizzato da A.S.V. Studios APPS
 
  // Versione Applicazione
  $version_app = "0.7.26 Alpha (Only Desktop)";
  
  // File Configurazione sito
  require "include/config.php";

  // Check Device
  if(isMobileDevice()) {
    if(isset($_GET['play'])){
      require "include/player.php";
    }elseif(isset($_GET['about'])){
      require "include/about.php";
    }else{
      require "include/mobileMANUTENZIONE.php";
    }
  }else{
    if(isset($_GET['playerDesktop'])){
      require "include/playerDesktop.php";
    }elseif(isset($_GET['about'])){
      require "include/about.php";
    }else{
      require "include/desktop.php";
    }
  }
?>
