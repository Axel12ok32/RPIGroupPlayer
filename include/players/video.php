<?php
    include "./include/structure/headVideoPlayer.php";
    $tvselect = $_GET['tv'] - 1;
?>

<div class="playervideo" style="position: absolute; bottom: 0; height: calc(100% - 65px); width: 100%;">
    <video id="my-video" class="video-js vjs-theme-sea" controls preload="auto" style="width: 100%; height: 100%;" poster="<?php echo $tvlist->station[$tvselect]->poster;?>" data-setup="{}" >
        <source src="<?php echo $tvlist->station[$tvselect]->stream;?>" type="application/x-mpegURL" />
    </video>
</div>

<?php include "./include/structure/footerVideoPlayer.php"; ?>