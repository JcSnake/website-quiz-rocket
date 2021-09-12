<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php') ?>
    <title>Rocketman Quiz</title>
	<script>
	sessionStorage.clear();
	</script>
</head>
<body>
    <?php include_once('template/header.php') ?>
    <section id="inicio" class="uk-hidden-small">
        <img src="assets/images/fondo_elton_piano.jpg" alt="" width="100%">
        <div class="uk-width-1-4 uk-position-absolute pos-title">
            <h1 class="txt-53px uk-contrast uk-text-uppercase uk-text-bold">¿Cuál es tu</h1>
            <h1 class="txt-94px uk-contrast uk-text-uppercase">Canción?</h1>
            <h2 class="uk-contrast uk-text-uppercase">haz el quiz y averígualo</h2>
            <div class="uk-text-left">
                <a href="quiz_1.php" class="uk-button uk-text-uppercase uk-width-5-6 brd-radius-40 c-blue uk-text-bold lh-5 txt-15em">Empezar</a>
            </div>
        </div>
    </section>
    <section class="pos10t uk-hidden-small">
        <div class="uk-text-center uk-width-1-1 uk-margin-bottom">
            <img src="assets/images/abajo.svg" alt="flecha">
        </div>
        <div class="uk-text-center uk-width-1-1 bg-white p10 uk-margin-top">
            <h2 class="uk-width-1-1 uk-text-uppercase uk-margin-remove c-black uk-text-bold">réntala ya en <a href="https://totalgo.totalplay.com.mx:444/TPW/TotalPlay.htm" target="_blank"><img class="pos-img-TP" src="assets/images/TP_gris.svg" alt="logoTotal" width="200"></a></h2>
        </div>
    </section>
    <section id="inicioMobile" class="uk-visible-small">
        <img src="assets/images/bg_elton_piano_mobile.png" alt="eltonPiano">
        <div class="uk-text-center uk-width-9-10 uk-container-center pos-title-responsive">
            <img src="assets/images/logo_x2.png" alt="logoRocketman">
            <h1 class="txt-30px uk-contrast uk-text-uppercase uk-text-bold">¿Cuál es tu</h1>
            <h2 class="txt-55px uk-contrast uk-text-uppercase">Canción?</h1>
            <h3 class="uk-contrast uk-text-uppercase">haz el quiz y averígualo</h3>
            <a href="quiz_1.php" class="uk-button uk-text-uppercase uk-width-1-2 brd-radius-40 c-blue uk-text-bold lh-5 txt-1em">Empezar</a>
        </div>
    </section>
    <section id="eltonYoung" class="bg-color uk-hidden-small pos10t">
        <div class="uk-grid uk-width-8-10 uk-container-center">
            <div class="uk-width-2-3 uk-margin-large-top">
                <img src="assets/images/logo_x2.png" alt="logo">
                <div class="uk-margin-top uk-width-3-4">
                    <div class="uk-margin-bottom">
                        <span class="uk-contrast uk-text-large uk-text-bold">Director:</span><span class="uk-contrast uk-margin-left">Dexter Fletcher</span><br>
                        <span class="uk-contrast uk-text-large uk-text-bold">Escritor:</span><span class="uk-contrast uk-margin-left">Lee Hall</span><br>
                        <span class="uk-contrast uk-text-large uk-text-bold">Elenco:</span><span class="uk-contrast uk-margin-left">Taron Egerton, Jamie Bell, Richard Madden</span>
                    </div>
                    <p class="uk-contrast uk-text-left txt-1em">
                        “Su música te inspira, su vida te sorprenderá”, Rocketman es una celebración musical única de las canciones más queridas de Elton John.
                        Descubre cómo un tímido chico de pueblo se convierte en una de las figuras más emblemáticas del rock & roll.
                        Repleta de grandes estrellas, esta aventura espectacular y electrizante está cargada de grandes números musicales y no se parece en nada a lo que hayas visto.
                    </p>
                </div>
                <hr class="uk-width-3-4 uk-margin-large-top">
                <div class="uk-width-1-2 uk-text-center uk-grid uk-grid-collapse uk-container-center">
                    <div class="uk-width-1-10 btn-play">
                        <img class="pos-img-play" src="assets/images/play.svg" alt="play">
                    </div>
                    <div class="">
                        <a href="#modalTrailer" class="uk-contrast uk-text-uppercase uk-margin-left pos-title-play c-white" data-uk-modal>ver trailer</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3 uk-text-center uk-margin-large-top">
                <img src="assets/images/poster_2x.png" alt="poster" width="280">
            </div>
        </div>
        <div class="rm-mrg-xlarge">
            <img src="assets/images/bg_elton_young.jpg" alt="eltonYoung">
        </div>
        <?php include_once('template/footer.php') ?>
    </section>
    <section id="eltonYoungMobile" class="bg-elton-mobile uk-visible-small uk-position-relative h220">
        <div class="uk-text-center uk-width-1-1 bg-white p10">
            <h4 class="uk-width-1-1 uk-text-uppercase uk-margin-remove c-black uk-text-bold">réntala ya en <a href="https://totalgo.totalplay.com.mx:444/TPW/TotalPlay.htm" target="_blank"><img class="pos-img-TP" src="assets/images/TP_gris.svg" alt="logoTotal" style="height:50px;"></a></h4>
        </div>
        <div class="uk-grid uk-width-9-10 uk-container-center uk-block">
            <div class="uk-width-1-1 uk-margin-large-top">
                <img src="assets/images/logo_x2.png" alt="logo">
                <div class="uk-margin-large-top uk-width-1-1">
                    <div class="uk-margin-bottom">
                        <span class="uk-contrast uk-text-large uk-text-bold">Director:</span><span class="uk-contrast uk-margin-left">Dexter Fletcher</span><br>
                        <span class="uk-contrast uk-text-large uk-text-bold">Escritor:</span><span class="uk-contrast uk-margin-left">Lee Hall</span><br>
                        <span class="uk-contrast uk-text-large uk-text-bold">Elenco:</span><span class="uk-contrast uk-margin-left">Taron Egerton, Jamie Bell, Richard Madden</span>
                    </div>
                    <p class="uk-contrast txt-1em">
                        “Su música te inspira, su vida te sorprenderá”, Rocketman es una celebración musical única de las canciones más queridas de Elton John.
                        Descubre cómo un tímido chico de pueblo se convierte en una de las figuras más emblemáticas del rock & roll.
                        Repleta de grandes estrellas, esta aventura espectacular y electrizante está cargada de grandes números musicales y no se parece en nada a lo que hayas visto.
                    </p>
                </div>
                <hr class="uk-width-1-1 uk-margin-large-top">
                <div class="uk-width-1-2 uk-text-center uk-grid uk-grid-collapse uk-container-center">
                    <div class="uk-width-1-10 btn-play">
                        <img class="pos-img-play" src="assets/images/play.svg" alt="play">
                    </div>
                    <div class="">
                        <a href="#modalTrailer" class="uk-contrast uk-text-uppercase uk-margin-left pos-title-play c-whites" data-uk-modal>ver trailer</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-text-center uk-margin-large-top">
                <img src="assets/images/poster_2x.png" alt="poster" width="500">
            </div>
        </div>
        <div class="pos10t">
            <img src="assets/images/bg_elton_young_mobile.jpg" alt="eltonYoung">
            <footer class="uk-width-1-1 uk-text-center">
                <section class="uk-margin-bottom">
                    <div class="uk-text-center bg-white p10 uk-grid">
                        <h4 class="uk-width-1-1 uk-text-uppercase uk-margin-remove c-black uk-text-bold">réntala ya en <a href="https://totalgo.totalplay.com.mx:444/TPW/TotalPlay.htm" target="_blank"><img class="pos-img-TP" src="assets/images/TP_gris.svg" alt="logoTotal" style="height:50px;"></a></h4>
                    </div>
                </section>
                <img src="assets/images/paramount_logo.svg" alt="logoParamount">
                <div class="uk-margin-top">
                    <span class="uk-contrast uk-text-small">© 2019 PARAMOUNT PICTURES. ALL RIGHTS RESERVED.</span>
                </div>
            </footer>
        </div>
    </section>
    <section>
        <div id="modalTrailer" class="uk-modal">
            <div class="uk-modal-dialog">
                <video id="video" controls="" name="media">
                    <source src="" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
</body>
<script>
    $('#modalTrailer').on({
        'show.uk.modal': function(){
            $("#video1")[0].play();
        },
        'hide.uk.modal': function(){
            $('#video1').get(0).pause();
            $('#video1').get(0).currentTime = 0;
        }
    });
</script>
</html>