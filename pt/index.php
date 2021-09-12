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
            <h1 class="txt-53px uk-contrast uk-text-uppercase uk-text-bold">Qual é a sua</h1>
            <h1 class="txt-94px uk-contrast uk-text-uppercase">canção?</h1>
            <h2 class="uk-contrast uk-text-uppercase">Faça o teste e descubra!</h2>
            <div class="uk-text-left">
                <a href="quiz_1.php" class="uk-button uk-text-uppercase uk-width-5-6 brd-radius-40 c-blue uk-text-bold lh-5 txt-15em">Comece o teste</a>
            </div>
        </div>
    </section>
    <section class="pos10t uk-hidden-small">
        <div class="uk-text-center uk-width-1-1 uk-margin-bottom">
            <img src="assets/images/abajo.svg" alt="flecha">
        </div>
        <div class="uk-text-center uk-width-1-1 bg-white p10 uk-margin-top">
            <h2 class="uk-width-1-1 uk-text-uppercase uk-margin-remove c-black uk-text-bold">alugue agora no<a href="http://bit.ly/rocketmansky" target="_blank"><img src="assets/images/skyplay.png" alt="skyplay"></a></h2>
        </div>
    </section>
    <section id="inicioMobile" class="uk-visible-small">
        <img src="assets/images/bg_elton_piano_mobile.png" alt="eltonPiano">
        <div class="uk-text-center uk-width-9-10 uk-container-center pos-title-responsive">
            <img src="assets/images/logo_x2.png" alt="logoRocketman">
            <h1 class="txt-30px uk-contrast uk-text-uppercase uk-text-bold">Qual é a sua</h1>
            <h2 class="txt-55px uk-contrast uk-text-uppercase">canção?</h1>
            <h3 class="uk-contrast uk-text-uppercase">Faça o teste e descubra!</h3>
            <a href="quiz_1.php" class="uk-button uk-text-uppercase uk-width-1-1 brd-radius-40 c-blue uk-text-bold lh-5 txt-1em">Comece o teste</a>
        </div>
    </section>
    <section id="eltonYoung" class="bg-color uk-hidden-small pos10t">
        <div class="uk-grid uk-width-8-10 uk-container-center">
            <div class="uk-width-2-3 uk-margin-large-top">
                <img src="assets/images/logo_x2.png" alt="logo">
                <div class="uk-margin-top uk-width-3-4">
                    <p class="uk-contrast uk-text-justify txt-1em">
                        A trajetória de como o tímido Reginald Dwight (Taron Egerton) se transformou em Elton John, ícone da música pop.
                        Desde a infância complicada, fruto do descaso do pai pela família, sua história de vida é contada através da releitura das músicas do superstar,
                        incluindo a relação do cantor com o compositor e parceiro profissional Bernie Taupin (Jamie Bell)
                        e o empresário e o ex-amante John Reid (Richard Madden).
                    </p>
                </div>
                <hr class="uk-width-3-4 uk-margin-large-top">
                <div class="uk-width-1-2 uk-text-center uk-grid uk-grid-collapse uk-container-center">
                    <div class="uk-width-1-10 btn-play">
                        <a href="#videoTrailer" data-uk-modal><img class="pos-img-play" src="assets/images/play.svg" alt="play"></a>
                    </div>
                    <div class="">
                        <a href="#videoTrailer" class="uk-contrast uk-text-uppercase uk-margin-left pos-title-play c-white" data-uk-modal>ver trailer</a>
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
            <h4 class="uk-width-1-1 uk-text-uppercase uk-margin-remove c-black uk-text-bold">alugue agora no <a href="http://bit.ly/rocketmansky" target="_blank"><img src="assets/images/skyplay.png" alt="logoTotal" style="height:50px;"></a></h4>
        </div>
        <div class="uk-grid uk-width-9-10 uk-container-center uk-block">
            <div class="uk-width-1-1 uk-margin-large-top p0">
                <img src="assets/images/logo_x2.png" alt="logo">
                <div class="uk-margin-large-top uk-width-1-1">
                    <p class="uk-contrast uk-text-justify txt-1em">
                        A trajetória de como o tímido Reginald Dwight (Taron Egerton) se transformou em Elton John, ícone da música pop.
                        Desde a infância complicada, fruto do descaso do pai pela família, sua história de vida é contada através da releitura das músicas do superstar,
                        incluindo a relação do cantor com o compositor e parceiro profissional Bernie Taupin (Jamie Bell)
                        e o empresário e o ex-amante John Reid (Richard Madden).
                    </p>
                </div>
                <hr class="uk-width-1-1 uk-margin-large-top">
                <div class="uk-width-1-2 uk-text-center uk-grid uk-grid-collapse uk-container-center">
                    <div class="uk-width-1-10 btn-play">
                        <a href="#videoTrailer" data-uk-modal><img class="pos-img-play" src="assets/images/play.svg" alt="play"></a>
                    </div>
                    <div class="">
                        <a href="#videoTrailer" class="uk-contrast uk-text-uppercase uk-margin-left pos-title-play c-white" data-uk-modal>ver trailer</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-text-center uk-margin-large-top p0">
                <img src="assets/images/poster_2x.png" alt="poster" width="500">
            </div>
        </div>
        <div class="pos10t">
            <img src="assets/images/bg_elton_young_mobile.jpg" alt="eltonYoung">
            <footer class="uk-width-1-1 uk-text-center">
                <section class="uk-margin-bottom">
                    <div class="uk-text-center bg-white p10 uk-grid">
                        <h2 class="uk-width-1-1 uk-text-uppercase uk-margin-remove c-black uk-text-bold uk-hidden-small">alugue agora no <a href="http://bit.ly/rocketmansky" target="_blank"><img src="assets/images/skyplay.png" alt="skyplay"></a></h2>
                        <h4 class="uk-width-1-1 uk-text-uppercase uk-margin-remove c-black uk-text-bold uk-visible-small">alugue agora no <a href="http://bit.ly/rocketmansky" target="_blank"><img src="assets/images/skyplay.png" alt="skyplay" width="100"></a></h4>
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
        <div id="videoTrailer" class="uk-modal">
            <div class="uk-modal-dialog">
                <video id="video1" controls>
                    <source src="assets/videos/Rocketman_brasil.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
</body>
<script>
    $('#videoTrailer').on({
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