<?php

// Inizializzazione Sito
$title_site = "RPIGroup Play";
$description_site = "Ascolta le radio del gruppo Radiopeopleitaly Group";
$logo_site = "./img/logoapp.png";
$favicon_site = "";

$thisurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


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

if(isMobileDevice()){
  $homepage = "?home";
  $ascolta = array(
    "1" => "?play=1",
    "2" => "?play=2"
  );
}else{
  $homepage = "?playerDesktop";
  $ascolta = array(
    "1" => "?playyerDesktop=1",
    "2" => "?playyerDesktop=2"
  );
}

// Radio / Flussi
$radio_code = array(
  "1" => "RDL",
  "2" => "Radio Città 105"
);
$radio_slogan = array(
  "RDL" => "O sei fuori, o sei dei nostri",
  "Radio Città 105" => "La radio della tua città"
);
$radio_logo = array(
  "Radio Città 105" => "https://www.radiocitta105.it/wp-content/uploads/2020/06/26168468_1590103344416186_7025872599153073152_n-1.png",
  "RDL" => "https://i0.wp.com/www.radiodiffusionelibera.com/wp-content/uploads/2017/01/RDL-Facebook.png?fit=370%2C370&ssl=1"
);
$radio_stream = array(
  "Radio Città 105" => "https://asvradiostream.asvstudios.tk/listen/radiocitta105/radio.mp3",
  "RDL" => "https://asvradiostream.asvstudios.tk/listen/radiodiffusionelibera/radio.mp3"
);
$radio_iframe = array(
  "Radio Città 105" => "https://www.radiocitta105.it/?proradio-popup=1",
  "RDL" => "https://www.radiodiffusionelibera.com/?proradio-popup=1"
)

?>
