<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include_once('template/head.php') ?>
</head>
<body class="bg-stars">
    <?php include_once('template/header.php') ?>
    <div class="uk-width-large-1-1 uk-width-1-1 uk-text-center uk-container-center">
        <h5 class="uk-contrast uk-text-bold uk-text-uppercase pos-title-question">Você não pode sair de casa sem...</h5>
    </div>
    <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-text-center uk-grid pos-container-videos">
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="spinner.php" onclick="sessionStorage.setItem('Q10', 1);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_1 (11).mp4" type="video/mp4">
                </video>
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_101.mp4" type="video/mp4">
                </video>
            </a>
            <a href="spinner.php" onclick="sessionStorage.setItem('Q10', 2);">
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_102.mp4" type="video/mp4">
                </video>
            </a>
            <div class="uk-text-center uk-width-1-1 uk-visible-small uk-margin-top">
                <span class="uk-contrast uk-text-large">10/10</span>
            </div>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-8-10 uk-container-center pos-text-video pos-text-video1"><a href="spinner.php" onclick="sessionStorage.setItem('Q10', 1);" class="uk-contrast c-white">Um impressionante par de óculos</a></h5>
        </div>
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="spinner.php" onclick="sessionStorage.setItem('Q10', 2);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_2 (9).mp4" type="video/mp4">
                </video>
            </a>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-8-10 uk-container-center pos-text-video pos-text-video2"><a href="spinner.php" onclick="sessionStorage.setItem('Q10', 2);" class="uk-contrast c-white">Fones de ouvido para sua música</a></h5>
        </div>
        <div class="uk-text-center uk-width-1-1 uk-hidden-small">
            <span class="uk-contrast">10/10</span>
        </div>
    </div>
</body>
</html>