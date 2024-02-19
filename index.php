<?php

require "./_config/glob.php";

if(isset($_GET['page'])){
    $page = $_GET['page'];
}elseif(isset($_GET["play"])){
    $page = "play";
}elseif(isset($_GET["tv"])){
    $page = "tv";
}else{
    $page = "start";
}

require "./_include/_layer/header.php";

switch ($page){
    case "home":
        require "./_include/_pages/home.php";
        break;
    case "about":
        require "./_include/_pages/about.php";
        break;
    case "play":
        require "./_include/_players/audio.php";
        break;
    case "tv":
        require "./_include/_players/video.php";
        break;
    default:
        if(isMobileDevice()){ require "./_include/_pages/ios.php"; require "./_include/_pages/home.php"; }else{ require "./_include/_pages/desktop.php"; }
}

require "./_include/_layer/footer.php";
