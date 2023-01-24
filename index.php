<?php

//   RPIGroup Play
//   Realizzato da A.S.V. Studios APPS


// File Configurazione sito

require "config.php";



// Accesso pagine app

if(isset($_GET['play'])){
  include "";
}elseif(isset($_GET['about'])){
  include "";
}elseif(isset($_GET['tv'])){
  include "";
}else{
  if(isMobileDevice()){
    include "";
  }else{
    if(isset($_GET['playerDesktop'])){
      include "";
    }else{
      include "";
    }
  }
}

?>
