<?php 
    include "./include/structure/player-page-start.php";
    $radioselect = $_GET['play'] - 1;
?>

<iframe src="<?php echo $radiolist->station[$radioselect]->contentplayer; ?>" frameborder="0"></iframe>
<div class="footer_player" <?php if(isMobileDeviceIOS()){ echo "style=\"height: 115px;\"";} ?>>
    <div class="row align-items-center">
        <div class="col-2" style="width: 20%;">
            <img src="<?php echo $radiolist->station[$radioselect]->logo; ?>" alt="Logo Radio" style="width: 60px;">
        </div>
        <div class="col">
            <div id="artist" style="font-weight: 700; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;"><?php echo $radiolist->station[$radioselect]->name; ?></div>
            <div id="title" style="text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical ;overflow: hidden;"><?php echo $radiolist->station[$radioselect]->slogan; ?></div>
        </div>
        <div class="col-2" style="text-align: center; margin-top: 7px; margin-right: 5px;">
            <a id="buttonPlayer" onclick="playAudioElement();">
                <i class="material-icons" id="play-pause" style="font-size: 35px;">play_arrow</i>
            </a>
        </div>
    </div>
</div>

<?php include "./include/structure/player-page-end.php"; ?>