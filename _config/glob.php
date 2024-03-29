<?php

// Inizializzazione Sito

$title_app = "RPIGroup Play";
$description_app = "Ascolta le radio del gruppo Radiopeopleitaly Group";
$logo_app = "./img/logoapp.png";



// Versione Applicazione

$changelog = simplexml_load_file("./_config/CHANGELOG.xml") or die("Errore: Impossibile accedere al file CHANGELOG");
$version_app = $changelog->version->number[0];



// Controllo Smarthpne

function isMobileDevice(){
  $aMobileUA = array(
    '/iphone/i' => 'iPhone',
    '/ipod/i' => 'iPod',
    '/ipad/i' => 'iPad',
    '/android/i' => 'Android',
    '/blackberry/i' => 'BlackBerry',
    '/webos/i' => 'Mobile'
  );
  foreach($aMobileUA as $sMobileKey => $sMobileOS){
    if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
      return true;
    }
  }
  return false;
}

function isMobileDeviceIOS(){
  $aMobileUA = array(
    '/iphone/i' => 'iPhone',
    '/ipod/i' => 'iPod',
    '/ipad/i' => 'iPad'
  );
  foreach($aMobileUA as $sMobileKey => $sMobileOS){
    if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
      return true;
    }
  }
  return false;
}



// Inizializzazione Lista Radio

$radiolist = simplexml_load_file("./_config/RADIO.xml") or die("Errore: Impossibile accedere al file Radio");
$tvlist = simplexml_load_file("./_config/TV.xml") or die("Errore: Impossibile accedere al file Tv");

?>
