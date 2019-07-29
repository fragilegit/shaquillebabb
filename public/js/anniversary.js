document.addEventListener("DOMContentLoaded", function(){
	$('.preloader-background').delay(1700).fadeOut('slow');
	
	$('.preloader-wrapper')
		.delay(1700)
		.fadeOut();
});
$(document).ready(function(){
    // var audio = $('#audio-control');
    var audio = document.getElementById('audio-control');
    var play = document.getElementById('icon-play');
    //$('#title-caption').hide();

    play.onclick = function(){

        enableAutoplay();
        hidePlay();
    }
    
    function hidePlay(){
        $(play).fadeOut(2000,function(){
            enableType();
        });
        // $(play).slideUp(2000);
    }

    function enableAutoplay(){
        audio.autoplay= true;
        audio.load();
        audio.loop = true;
    }
    
    function enableType(){

    var typed = new Typed(".typed", {
        strings: [" ","Hi Baby^3000",
        "It Doesn't Matter How The Past Has Been...^3000",
        "I Promise, Our Future Will Be <p class='animated flipInX pulse'>Brighter</p> ^3000",
        "Today we're 3 Years, Until I See You...^3000",
        "Happy Anniversary <br> My LoVe <i class='far fa-heart animated pulse'></i><i class='fas fa-heart animated pulse'></i>^5000"],
        typeSpeed: 200,
        smartBackspace: true,
        startDelay: 1000,
        onComplete: function(){
            document.getElementById('title-caption').classList.remove('hide');
        }
        });
    }
});