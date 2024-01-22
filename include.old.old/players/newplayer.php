<?php
  $radio_select = $radio_code[$_GET['playnew']];
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <?php include "./include/metatag.php"; ?>
        <link rel="stylesheet" href="css/player.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    </head>
    <body id="body" class="rpi_mbody">
        <div class="rpi_mpreloader" id="preloader">
            <img src="img/RpiGroupPlayWHITE.png" alt="Logo" style="width: 315px;">
        </div>
        <?php include "./include/forMobile/downloadappios.php"; ?>
        <div class="rpi_mcontainer">
            <div class="nav">
                <a data-bs-toggle="offcanvas" href="#menu" role="button" aria-controls="menu"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg></a>
                <div class="title" style="font-size: 20px; cursor: pointer;" onclick="location.href='<?php echo $homepage; ?>';">
                    RPIGroup
                </div>
                <?php include "./include/offcanvas.php"; ?>
            </div>
            <div style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%)">Caricamento...</div>
            <iframe src="<?php echo $radio_contentplayer[$radio_select]; ?>" frameborder="0"></iframe>
            <div class="footer_player" <?php if(isMobileDeviceIOS()){ echo "style=\"height: 115px;\"";} ?>>
                <div class="row align-items-center">
                    <div class="col-2" style="width: 20%;">
                        <img src="<?php echo $radio_logo[$radio_select]; ?>" alt="Logo Radio" style="width: 60px;">
                    </div>
                    <div class="col">
                        <div id="artist" style="font-weight: 700;"><?php echo $radio_select; ?></div>
                        <div id="title"><?php echo $radio_slogan[$radio_select]; ?></div>
                    </div>
                    <div class="col-2" style="text-align: center; margin-top: 7px; margin-right: 5px;">
                        <a id="buttonPlayer" onclick="playAudioElement();">
                            <i class="material-icons" id="play-pause" style="font-size: 35px;">play_arrow</i>
                        </a>
                    </div>
                </div>
            </div>
            <audio src="" id="audioElement" preload="true" class="player"></audio>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/lowlag.js"></script>
        <script>
        // Audio Element
        $(document).ready(function() {
            var $audioElement = $('#audioElement');
            var audioEl = $audioElement[0];
            var audioSources = {
                "audio1": "<?php echo $radio_stream[$radio_select]; ?>"
            };
            playAudioElement = function() {
                audioEl.play();
                document.getElementById("play-pause").innerHTML = "pause";
                document.getElementById("buttonPlayer").setAttribute('onclick','stopAudioElement()');
            }
            stopAudioElement = function() {
                audioEl.pause();
                audioEl.currentTime = 0;
                document.getElementById("play-pause").innerHTML = "play_arrow";
                document.getElementById("buttonPlayer").setAttribute('onclick','playAudioElement()');
            }
            changeAudioElement = function(tag, autoplay) {
                var source = $audioElement.attr('data-source');

                if(tag === undefined || audioSources[tag] === undefined) {
                    return;
                }

                $audioElement.attr('src', audioSources[tag]);
                $audioElement.attr('data-source', tag);

                if (autoplay) {
                    audioEl.play();
                }
            }
            changeAudioElement('audio1', false); // starts with audio1
        });
        </script>
    </body>
</html>