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
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body class="rpi_dbody">
        <div class="rpi_dbox rpi_dbox-extra">
            <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
            <p class="subtitle"><i>Un nuovo modo di ascoltare musica</i></p>
            <hr>
            Ascolta le nostre emittenti con la nostra nuova app disegnata per smartphone (e non...)
            <hr>
            <button class="rpi_dbtn" type="button" name="button" onclick="window.open('?playerDesktop','popUpWindow','height=600,width=385,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no, status=yes');">ASCOLTA RPIGRPUP PLAY</button>
        </div>
        <div class="rpi_dfooter">
            App powered by A.S.V. Studios APPS • Versione App: <?php echo $version_app; ?>
        </div>
    </body>
</html>