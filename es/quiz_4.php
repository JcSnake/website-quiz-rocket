<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php') ?>
    <title>Pregunta 4</title>
</head>
<body class="bg-stars">
    <?php include_once('template/header.php') ?>
    <div class="uk-width-large-1-1 uk-width-1-1 uk-text-center uk-container-center">
        <h5 class="uk-contrast uk-text-bold uk-text-uppercase pos-title-question">¿qué tan alto escuchas la música?</h5>
    </div>
    <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-text-center uk-grid pos-container-videos">
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="quiz_5.php" onclick="sessionStorage.setItem('Q4', 1);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_1 (5).mp4" type="video/mp4">
                </video>
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_41.mp4" type="video/mp4">
                </video>
            </a>
            <a href="quiz_5.php" onclick="sessionStorage.setItem('Q4', 2);">
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_42.mp4" type="video/mp4">
                </video>
            </a>
            <div class="uk-text-center uk-width-1-1 uk-visible-small uk-margin-top">
                <span class="uk-contrast uk-text-large">4/10</span>
            </div>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-8-10 uk-container-center pos-text-video pos-text-video1"><a href="quiz_5.php" onclick="sessionStorage.setItem('Q4', 1);" class="uk-contrast c-white">Bajo y en el fondo para relajarme</a></h5>
        </div>
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="quiz_5.php" onclick="sessionStorage.setItem('Q4', 2);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_2 (4).mp4" type="video/mp4">
                </video>
            </a>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-5-10 uk-container-center pos-text-video pos-text-video2"><a href="quiz_5.php" onclick="sessionStorage.setItem('Q4', 2);" class="uk-contrast c-white">¡súbele todo!</a></h5>
        </div>
        <div class="uk-text-center uk-width-1-1 uk-hidden-small">
            <span class="uk-contrast">4/10</span>
        </div>
    </div>
</body>
</html>