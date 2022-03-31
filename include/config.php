<?php

// Inizializzazione Sito
$title_site = "RPIGroup Play";
$description_site = "";
$logo_site = "";
$favicon_site = "";


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


// Radio / Flussi
$radio_list = array(
  "Radio Città 105" => "#",
  "RDL Radio Diffusione Libera" => "#"
);

$radio_stream = array(
  "Radio Città 105" => "#",
  "RDL Radio Diffusione Libera" => "#"
);

?>
