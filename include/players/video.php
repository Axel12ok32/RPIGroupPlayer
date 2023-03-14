<?php include "./include/structure/video-page-start.php"; ?>

<div class="playervideo" style="position: absolute; bottom: 0; height: calc(100% - 65px); width: 100%;">
    <video id="my-video" class="video-js vjs-theme-sea" controls preload="auto" style="width: 100%; height: 100%;" data-setup="{}">
        <source src="https://stream.video.asvstudios.it/webtv/streams/radiocitta105.m3u8" type="application/x-mpegURL" />
    </video>
</div>



<?php include "./include/structure/video-page-end.php"; ?>