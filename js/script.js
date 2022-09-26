window.onload = function(){
  $("#preloader").fadeOut(150);
}

function disable_f5(e)
{
  if ((e.which || e.keyCode) == 116)
  {
      e.preventDefault();
  }
}

$(document).ready(function(){
    $(document).bind("keydown", disable_f5);    
});

window.addEventListener('contextmenu', function (e) { 
  e.preventDefault(); 
}, false);

var body = document.getElementById("body");
var preloader = document.getElementById("preloader");
body.removeChild(preloader);

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
};