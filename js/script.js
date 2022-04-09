window.onload = function(){
  $("#preloader").fadeOut(150);
}

var body = document.getElementById("body");
var preloader = document.getElementById("preloader");
body.removeChild(preloader);
