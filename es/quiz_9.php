<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php') ?>
    <title>Pregunta 9</title>
</head>
<body class="bg-stars">
    <?php include_once('template/header.php') ?>
    <div class="uk-width-large-1-1 uk-width-1-1 uk-text-center uk-container-center">
        <h5 class="uk-contrast uk-text-bold uk-text-uppercase pos-title-question">¿cómo es tu día libre perfecto?</h5>
    </div>
    <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-text-center uk-grid pos-container-videos">
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="quiz_10.php" onclick="sessionStorage.setItem('Q9', 1);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_1 (10).mp4" type="video/mp4">
                </video>
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_91.mp4" type="video/mp4">
                </video>
            </a>
            <a href="quiz_10.php" onclick="sessionStorage.setItem('Q9', 2);">
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_92.mp4" type="video/mp4">
                </video>
            </a>
            <div class="uk-text-center uk-width-1-1 uk-visible-small uk-margin-top">
                <span class="uk-contrast uk-text-large">9/10</span>
            </div>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-8-10 uk-container-center pos-text-video pos-text-video1"><a href="quiz_10.php" onclick="sessionStorage.setItem('Q9', 1);" class="uk-contrast c-white">Quedarte a descansar en pijamas</a></h5>
        </div>
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="quiz_10.php" onclick="sessionStorage.setItem('Q9', 2);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_2 (8).mp4" type="video/mp4">
                </video>
            </a>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-8-10 uk-container-center pos-text-video pos-text-video2"><a href="quiz_10.php" onclick="sessionStorage.setItem('Q9', 2);" class="uk-contrast c-white">irte de compras</a></h5>
        </div>
        <div class="uk-text-center uk-width-1-1 uk-hidden-small">
            <span class="uk-contrast">9/10</span>
        </div>
    </div>
</body>
</html>