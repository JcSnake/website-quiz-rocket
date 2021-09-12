<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('template/head.php')?>
    <title>Document</title>
</head>
<body>
    <?php include_once('template/header.php') ?>
    <section id="cancion1" hidden>
        <div class="uk-width-1-1 uk-text-center">
            <video id="videoResultado1" autoplay controls muted playsinline width="100%">
                <source src="assets/videos/mob_tiny_dancer.mp4" type="video/mp4">
            </video>
            <a id="sonido" class="uk-contrast uk-text-uppercase pos-mute c-white"><img class="imgAudio1" src="assets/images/audio_no.svg" alt="mute" width="20"></a>
            <a href="tu_cancion.php" class="uk-contrast uk-text-uppercase pos-saltar c-white">saltar</a>
        </div>
    </section>
    <section id="cancion2" hidden>
        <div class="uk-width-1-1 uk-text-center">
            <video id="videoResultado2" autoplay controls muted playsinline width="100%">
                <source src="assets/videos/rocketman.mp4" type="video/mp4">
            </video>
            <a id="sonido2" class="uk-contrast uk-text-uppercase pos-mute c-white"><img class="imgAudio2" src="assets/images/audio_no.svg" alt="mute" width="20"></a>
            <a href="tu_cancion.php" class="uk-contrast uk-text-uppercase pos-saltar c-white">saltar</a>
        </div>
    </section>
    <section id="cancion3" hidden>
        <div class="uk-width-1-1 uk-text-center">
            <video id="videoResultado3" autoplay controls muted playsinline width="100%">
                <source src="assets/videos/mob_bennie.mp4" type="video/mp4">
            </video>
            <a id="sonido3" class="uk-contrast uk-text-uppercase pos-mute c-white"><img class="imgAudio3" src="assets/images/audio_no.svg" alt="mute" width="20"></a>
            <a href="tu_cancion.php" class="uk-contrast uk-text-uppercase pos-saltar c-white">saltar</a>
        </div>
    </section>
    <section id="cancion4" hidden>
        <div class="uk-width-1-1 uk-text-center">
            <video id="videoResultado4" autoplay controls muted playsinline width="100%">
                <source src="assets/videos/mob_saturday.mp4" type="video/mp4">
            </video>
            <a id="sonido4" class="uk-contrast uk-text-uppercase pos-mute c-white"><img class="imgAudio4" src="assets/images/audio_no.svg" alt="mute" width="20"></a>
            <a href="tu_cancion.php" class="uk-contrast uk-text-uppercase pos-saltar c-white">saltar</a>
        </div>
    </section>
    <section id="cancion5" hidden>
        <div class="uk-width-1-1 uk-text-center">
            <video id="videoResultado5" autoplay controls muted playsinline width="100%">
                <source src="assets/videos/mob_your_song.mp4" type="video/mp4">
            </video>
            <a id="sonido5" class="uk-contrast uk-text-uppercase pos-mute c-white"><img class="imgAudio5" src="assets/images/audio_no.svg" alt="mute" width="20"></a>
            <a href="tu_cancion.php" class="uk-contrast uk-text-uppercase pos-saltar c-white">saltar</a>
        </div>
    </section>
</body>
<script src="assets/js/video-trailer-min.js"></script>
<script>
	var e1, e2, e3, e4, e5, w;
	w = e1 = e2 = e3 = e4 = e5 = 0;
	if (sessionStorage.getItem("Q1") == '1') e2++;
	if (sessionStorage.getItem("Q1") == '2') e5++;
	if (sessionStorage.getItem("Q2") == '1') e2++;
	if (sessionStorage.getItem("Q2") == '2') e3++;
	if (sessionStorage.getItem("Q3") == '1') e5++;
	if (sessionStorage.getItem("Q3") == '2') e1++;
	if (sessionStorage.getItem("Q4") == '1') e1++;
	if (sessionStorage.getItem("Q4") == '2') e3++;
	if (sessionStorage.getItem("Q5") == '1') e4++;
	if (sessionStorage.getItem("Q5") == '2') e1++;
	if (sessionStorage.getItem("Q6") == '1') e2++;
	if (sessionStorage.getItem("Q6") == '2') e1++;
	if (sessionStorage.getItem("Q7") == '1') e3++;
	if (sessionStorage.getItem("Q7") == '2') e2++;
	if (sessionStorage.getItem("Q8") == '1') e5++;
	if (sessionStorage.getItem("Q8") == '2') e4++;
	if (sessionStorage.getItem("Q9") == '1') e5++;
	if (sessionStorage.getItem("Q9") == '2') e4++;
	if (sessionStorage.getItem("Q10") == '1') e4++;
	if (sessionStorage.getItem("Q10") == '2') e3++;
	if (e1 >= e2 && e1 >= e3 && e1 >= e4 && e1 >= e5) w = '1';
	if (e2 >= e1 && e2 >= e3 && e2 >= e4 && e2 >= e5) w = '2';
	if (e3 >= e1 && e3 >= e2 && e3 >= e4 && e3 >= e5) w = '3';
	if (e4 >= e1 && e4 >= e2 && e4 >= e3 && e4 >= e5) w = '4';
	if (e5 >= e1 && e5 >= e2 && e5 >= e3 && e5 >= e4) w = '5';
	$('#cancion' + w).show();
</script>
</html>