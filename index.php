<?php

require "./_config/glob.php";
require "./_include/_layer/header.php";

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "start";
}

if(isset($_GET["play"])){ $page = "play"; }
if(isset($_GET["tv"])){ $page = "tv"; } 

switch ($page){
    case "home":
        //require "";
        echo "home page";
        break;
    case "about":
        //require "";
        echo "about";
        break;
    case "play":
        //require "";
        echo "play";
        break;
    case "tv":
        //require "";
        echo "tv";
        break;
    default:
        //if(isMobileDevice()){ require ""; }else{ require ""; }
        echo "start page";
        
}

require "./_include/_layer/footer.php";

?>
