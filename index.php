<?php

//   RPIGroup Play
//   Realizzato da A.S.V. Studios APPS


// File Configurazione sito

require "config.php";



// Accesso pagine app

if(isset($_GET['play'])){
  include "./include/players/audio.php";
}elseif(isset($_GET['about'])){
  include "./include/pages/about.php";
}elseif(isset($_GET['tv'])){
  include "./include/players/video.php";
}else{
  if(isMobileDevice()){
    include "./include/pages/home.php";
  }else{
    if(isset($_GET['playerDesktop'])){
      include "./include/pages/home.php";
    }else{
      include "./include/pages/desktop.php";
    }
  }
}

?>
