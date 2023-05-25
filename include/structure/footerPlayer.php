            <audio id="audioElement" preload="true" class="player"></audio>
        </div>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/lowlag.js"></script>
        <script>
            var player = document.getElementById('audioElement');
            if (Hls.isSupported()) {
                var hls = new Hls({
                    debug: false,
                });
                hls.loadSource('<?php echo $radiolist->station[$radioselect]->streamhls; ?>');
                hls.attachMedia(player);
                hls.on(Hls.Events.MEDIA_ATTACHED, function () {
                    //player.play();
                });
            } else if (player.canPlayType('application/vnd.apple.mpegurl')) {
                player.src = '<?php echo $radiolist->station[$radioselect]->streamhls; ?>';
                player.addEventListener('canplay', function () {
                //player.play();
            });
            }
        </script>
        <script>
        // Audio Element
        $(document).ready(function() {
            var $audioElement = $('#audioElement');
            var audioEl = $audioElement[0];
            // var audioSources = {
            //     "audio1": "<?php echo $radiolist->station[$radioselect]->stream; ?>"
            // };
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
            // changeAudioElement('audio1', false); // starts with audio1
        });
        </script>
    </body>
</html>