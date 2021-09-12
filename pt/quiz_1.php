<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include_once('template/head.php') ?>
</head>
	<script>
	sessionStorage.clear();
	</script>
<body class="bg-stars">
    <?php include_once('template/header.php') ?>
    <div class="uk-width-large-1-1 uk-width-9-10 uk-text-center uk-container-center">
        <h5 class="uk-contrast uk-text-bold uk-text-uppercase pos-title-question">O que você queria ser quando era mais jovem?</h5>
    </div>
    <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-text-center uk-grid pos-container-videos">
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="quiz_2.php" onclick="sessionStorage.setItem('Q1', 1);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_1 (2).mp4" type="video/mp4">
                </video>
                <video autoplay playsinline loop class="uk-visible-small" width="100%">
                    <source src="assets/videos/Mobile/mob_a_11.mp4" type="video/mp4">
                </video>
            </a>
            <a href="quiz_2.php" onclick="sessionStorage.setItem('Q1', 2);">
                <video autoplay playsinline loop class="uk-visible-small">
                    <source src="assets/videos/Mobile/mob_a_12.mp4" type="video/mp4">
                </video>
            </a>
            <div class="uk-text-center uk-width-1-1 uk-visible-small">
                <span class="uk-contrast uk-text-large">1/10</span>
            </div>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-8-10 uk-container-center pos-text-video pos-text-video1"><a href="quiz_2.php" class="txt-none uk-contrast c-white" onclick="sessionStorage.setItem('Q1', 1);">Um astronauta, sempre mirando as estrelas</a></h5>
        </div>
        <div class="uk-width-large-1-2 uk-width-1-1 uk-container-center uk-margin-top h-vid p0">
            <a href="quiz_2.php" onclick="sessionStorage.setItem('Q1', 2);">
                <video autoplay playsinline loop class="uk-hidden-small">
                    <source src="assets/videos/a_2 (1).mp4" type="video/mp4">
                </video>
            </a>
            <h5 class="uk-contrast uk-text-bold uk-text-uppercase uk-width-5-10 uk-container-center pos-text-video pos-text-video2"><a href="quiz_2.php" class="txt-none uk-contrast c-white" onclick="sessionStorage.setItem('Q1', 2);">Um artista, eu amo ser criativo</a></h5>
        </div>
        <div class="uk-text-center uk-width-1-1 uk-hidden-small">
            <span class="uk-contrast">1/10</span>
        </div>
    </div>
</body>
</html>