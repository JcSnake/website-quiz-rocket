
    if($(window).width() < 500) {
        document.getElementById("videoResultado1").src="assets/videos/mob_tiny_dancer.mp4";
    } else {
        document.getElementById("videoResultado1").src="assets/videos/tiny_dancer.mp4";
    }

    if($(window).width() < 500) {
        document.getElementById("videoResultado2").src="assets/videos/mob_rocketman.mp4";
    } else {
        document.getElementById("videoResultado2").src="assets/videos/rocketman.mp4";
    }

    if($(window).width() < 500) {
        document.getElementById("videoResultado3").src="assets/videos/mob_bennie.mp4";
    } else {
        document.getElementById("videoResultado3").src="assets/videos/bennie.mp4";
    }

    if($(window).width() < 500) {
        document.getElementById("videoResultado4").src="assets/videos/mob_saturday.mp4";
    } else {
        document.getElementById("videoResultado4").src="assets/videos/saturday.mp4";
    }

    if($(window).width() < 500) {
        document.getElementById("videoResultado5").src="assets/videos/mob_your_song.mp4";
    } else {
        document.getElementById("videoResultado5").src="assets/videos/your_song.mp4";
    }

    $("#videoResultado1").bind("ended", function() {
        window.location.replace("tu_cancion.php");
    });

    $("#videoResultado2").bind("ended", function() {
        window.location.replace("tu_cancion.php");
    });

    $("#videoResultado3").bind("ended", function() {
        window.location.replace("tu_cancion.php");
    });

    $("#videoResultado4").bind("ended", function() {
        window.location.replace("tu_cancion.php");
    });

    $("#videoResultado5").bind("ended", function() {
        window.location.replace("tu_cancion.php");
    });

    $('#sonido').click(function() {
        if( $("video").prop('muted') ) {
            $("video").prop('muted', false);
        } else {
            $("video").prop('muted', true);
        }
    });

    $('#sonido2').click(function() {
        if( $("video").prop('muted') ) {
            $("video").prop('muted', false);
        } else {
            $("video").prop('muted', true);
        }
    });

    $('#sonido3').click(function() {
        if( $("video").prop('muted') ) {
            $("video").prop('muted', false);
        } else {
            $("video").prop('muted', true);
        }
    });

    $('#sonido4').click(function() {
        if( $("video").prop('muted') ) {
            $("video").prop('muted', false);
        } else {
            $("video").prop('muted', true);
        }
    });

    $('#sonido5').click(function() {
        if( $("video").prop('muted') ) {
            $("video").prop('muted', false);
        } else {
            $("video").prop('muted', true);
        }
    });

    $('.imgAudio5').on({
        'click': function(){
            if($('.imgAudio5').attr("src") == 'assets/images/audio_no.svg'){
                $('.imgAudio5').attr('src','assets/images/audio.svg');
            } else {
                $('.imgAudio5').attr('src','assets/images/audio_no.svg');
            }
        }
    });

    $('.imgAudio1').on({
        'click': function(){
            if($('.imgAudio1').attr("src") == 'assets/images/audio_no.svg'){
                $('.imgAudio1').attr('src','assets/images/audio.svg');
            } else {
                $('.imgAudio1').attr('src','assets/images/audio_no.svg');
            }
        }
    });

    $('.imgAudio2').on({
        'click': function(){
            if($('.imgAudio2').attr("src") == 'assets/images/audio_no.svg'){
                $('.imgAudio2').attr('src','assets/images/audio.svg');
            } else {
                $('.imgAudio2').attr('src','assets/images/audio_no.svg');
            }
        }
    });

    $('.imgAudio3').on({
        'click': function(){
            if($('.imgAudio3').attr("src") == 'assets/images/audio_no.svg'){
                $('.imgAudio3').attr('src','assets/images/audio.svg');
            } else {
                $('.imgAudio3').attr('src','assets/images/audio_no.svg');
            }
        }
    });

    $('.imgAudio4').on({
        'click': function(){
            if($('.imgAudio4').attr("src") == 'assets/images/audio_no.svg'){
                $('.imgAudio4').attr('src','assets/images/audio.svg');
            } else {
                $('.imgAudio4').attr('src','assets/images/audio_no.svg');
            }
        }
    });

