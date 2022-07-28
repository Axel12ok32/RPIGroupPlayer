function play_audio(task) {
    if(task == 'play'){
        $(".player").trigger('play');
        document.getElementById("play-pause").innerHTML = "pause";
        document.getElementById("buttonPlayer").setAttribute('onclick','play_audio(\'stop\')');
    }
    if(task == 'stop'){
        $(".player").trigger('pause');
        $(".player").prop("currentTime",0);
        document.getElementById("play-pause").innerHTML = "play_arrow";
        document.getElementById("buttonPlayer").setAttribute('onclick','play_audio(\'play\')');
    }
}