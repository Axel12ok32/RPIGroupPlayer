window.onload = function(){
  $("#preloader").fadeOut(150);
}

var body = document.getElementById("body");
var preloader = document.getElementById("preloader");
body.removeChild(preloader);

(function( win ){
	var doc = win.document;
	
	// If there's a hash, or addEventListener is undefined, stop here
	if( !location.hash && win.addEventListener ){
		
		//scroll to 1
		win.scrollTo( 0, 1 );
		var scrollTop = 1,
			getScrollTop = function(){
				return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop || doc.body.scrollTop || 0;
			},
		
			//reset to 0 on bodyready, if needed
			bodycheck = setInterval(function(){
				if( doc.body ){
					clearInterval( bodycheck );
					scrollTop = getScrollTop();
					win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
				}	
			}, 15 );
		
		win.addEventListener( "load", function(){
			setTimeout(function(){
				//at load, if user hasn't scrolled more than 20 or so...
				if( getScrollTop() < 20 ){
					//reset to hide addr bar at onload
					win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
				}
			}, 0);
		}, false );
	}
})( this );

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