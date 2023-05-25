<!DOCTYPE html>
<html lang="it">
    <head>
        <title><?php echo $title_site; ?></title>    
        <meta name="description" content="<?php echo $description_site; ?>">
        <meta name="application-name" content="<?php echo $title_site; ?>">
        <link rel="icon" type="image/png" href="<?php echo $logo_site; ?>">
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320"/>
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="robots" content="index, follow">    
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="<?php echo $title_site; ?>">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="<?php echo $title_site; ?>">
        <meta name="theme-color" content="#0f1964">
        <meta name="apple-mobile-web-app-status-bar-style" content="#0f1964">
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/extra.css">
        <link rel="stylesheet" href="css/player.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/hls.js"></script>
    </head>
    <body>
        <div class="rpi_mpreloader" id="preloader">
            <img src="img/RpiGroupPlayWHITE.png" alt="Logo">
        </div>
        <div class="rpi_mcontainer">
            <?php include "./include/structure/navigation/navbar.php"; ?>
            <div style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%)">Caricamento...</div>

