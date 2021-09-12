<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <title>Testo one Rocket</title>
    <meta property="og:title" content="A,JSDKJASHDKJHASKJDHKJAH" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://hyperiontechlab.com/rocketman/es/resultado_uno/" />
    <meta property="og:image"
        content="https://img.buzzfeed.com/buzzfeed-static/static/2019-08/29/19/enhanced/5209b477909a/original-189-1567108266-2.jpg" />
    <meta property="og:description" content="AHSDKHGASDGAJGSDJHAS" />
    <meta property="og:site_name" content="SKDHS SKDHFKS ASDGHJASGH" />
    <meta property="fb:app_id" content="640960563397252" />
</head>
<body>
    <!-- Include the JavaScript SDK on your page once, ideally right after the opening body tag. -->
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '640960563397252',
                xfbml: true,
                version: 'v4.0'
            });
            FB.AppEvents.logPageView();
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=640960563397252&autoLogAppEvents=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Create a custom button with a unique id -->
    <button id="shareBtn">Share</button>

    <!-- Call Share Dialog on the the above created custom button using button id -->
    <script>
        document.getElementById('shareBtn').onclick = function () {
            FB.ui({
                method: 'share',
                mobile_iframe: true,
                href: 'https://hyperiontechlab.com/rocketman/es/resultado_uno/'
            }, function (response) {});
        }
    </script>

</body>
</html>