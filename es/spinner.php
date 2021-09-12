<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php')?>
    <title>Cargando...</title>
    <meta http-equiv="refresh" content="5;URL=resultado.php">
</head>
<body>
    <?php include_once('template/header.php')?>
    <video id="videoSpinner" autoplay playsinline muted class="uk-width-1-1 uk-hidden-small">
        <source src="assets/videos/Discoball_large.mp4" type="video/mp4">
    </video>
    <video id="videoSpinnerMob" autoplay playsinline muted class="uk-width-1-1 uk-visible-small">
        <source src="assets/videos/Discoball_mob.mp4" type="video/mp4">
    </video>
</body>
<script src="assets/js/function.min.js"></script>
</html>