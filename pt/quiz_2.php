<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include_once('template/head.php') ?>
</head>
<body class="bg-stars">
    <?php include_once('template/header.php') ?>
    <div class="uk-width-large-1-1 uk-width-1-1 uk-text-center uk-container-center">
        <h5 class="uk-contrast uk-text-bold uk-text-uppercase pos-title-question">Quando sai, seu estilo é…</h5>
    </div>
    <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-text-center uk-grid pos-container-videos">
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="quiz_3.php" onclick="sessionStorage.setItem('Q2', 1);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_1 (3).mp4" type="video/mp4">
                </video>
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_21.mp4" type="video/mp4">
                </video>
            </a><a href="quiz_3.php" onclick="sessionStorage.setItem('Q2', 2);">
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_22.mp4" type="video/mp4">
                </video>
            </a>
            <div class="uk-text-center uk-width-1-1 uk-visible-small uk-margin-top">
                <span class="uk-contrast uk-text-large">2/10</span>
            </div>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-8-10 uk-container-center pos-text-video pos-text-video1"><a href="quiz_3.php" class="txt-none uk-contrast c-white" onclick="sessionStorage.setItem('Q2', 1);">Elegante e chique</a></h5>
        </div>
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="quiz_3.php" onclick="sessionStorage.setItem('Q2', 2);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_2 (2).mp4" type="video/mp4">
                </video>
            </a>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-8-10 uk-container-center pos-text-video pos-text-video2"><a href="quiz_3.php" class="txt-none uk-contrast c-white" onclick="sessionStorage.setItem('Q2', 2);">Vistoso e chamativo</a></h5>
        </div>
        <div class="uk-text-center uk-width-1-1 uk-hidden-small">
            <span class="uk-contrast">2/10</span>
        </div>
    </div>
</body>
</html>