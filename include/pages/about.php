<?php include "./include/structure/headPages.php"; ?>

<?php
if($_GET['about'] == "chisiamo"){
    include "./include/pages/about/chisiamo.php";
}elseif($_GET['about'] == "comeascoltarci"){
    include "./include/pages/about/howtoworks.php";
}elseif($_GET['about'] == "contatti"){
    include "./include/pages/about/contatti.php";
}elseif($_GET['about'] == "changelog"){
    include "./include/pages/about/changelog.php";
}else{
    if(isMobileDevice()){
        header("Location: /");
    }else{
        header("Location: ?playerDesktop");
    }
}
?>

<?php include "./include/structure/footerPages.php"; ?>