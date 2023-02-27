window.onload = function(){
  $("#preloader").fadeOut(150);
}

if (window.safari) {
    history.pushState(null, null, location.href);
    window.onpopstate = function(event) {
        history.go(1);
    };
}

window.history.replaceState(null, null, "#" + url)

/*! Normalized address bar hiding for iOS & Android (c) @scottjehl MIT License */
(function( win ){
	var doc = win.document;
	
	// If there's a hash, or addEventListener is undefined, stop here
	if(!win.navigator.standalone && !location.hash && win.addEventListener ){
		
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

$(document).ready(function(){
    // iOS web app full screen hacks.
    if(window.navigator.standalone == true) {
        // make all link remain in web app mode.
        $('a').click(function() {
            window.location = $(this).attr('href');
            return false;
        });
    }

	if (document.webkitFullscreenElement) {
		document.webkitCancelFullScreen();
	  } else {
		const el = document.documentElement;
		el.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
	  }
});

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

window.addEventListener("load",function() {
  setTimeout(function(){
      // This hides the address bar:
      window.scrollTo(0, 1);
  }, 0);
});

var body = document.getElementById("body");
var preloader = document.getElementById("preloader");
body.removeChild(preloader);

/* function play_audio(task) {
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
}; */