jQuery(document).ready(function($){

    // MediaElement 
    $(".video-player").mediaelementplayer({
        features: ["playpause", "current", "progress", "volume", "duration", "fullscreen"],
        loop: true,
        autoplay: true,
        startVolume: 0.8,
        pauseOtherPlayers: false,
        playText: "Reproducir",
        pauseText: "Pausa",
        muteText: "Silenciar",
        unmuteText: "Activar el sonido",
        fullscreenText: "Pantalla completa",       
        hideVolumeOnTouchDevices: false,
    });
    
    // Wow Animate
	wow = new WOW(
      	{
     		boxClass:     "wow",     
     		animateClass: "animated",
     		offset:       200,         
     		mobile:       true,      
     		live:         true       
    	}
    )
    wow.init();
});