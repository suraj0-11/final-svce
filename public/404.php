<?php
if ($page_not_found) {
    header('This is not the page you are looking for', true, 404);
    include ('404.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        html {
            text-align: center;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            box-sizing: border-box;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            background-color: #222;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .travolta {
            z-index: -1;
            width: 100vw;
            height: 100vh;
            opacity: 0.3;
            position: absolute;
            top: 0;
            left: 0;
            background: url('https://assets-9gag-fun.9cache.com/s/fab0aa49/033037194a549b0bf83e2ac4ba90706a52a9132e/static/dist/web6/img/404/bg.gif') center center no-repeat;
            background-size: cover;
            background-color: black;
        }

        h1 {
            font-size: 775%;
            padding-top: 25vh;
            margin-bottom: 1vh;
            z-index: 2;
        }

        p {
            font-size: 125%;
        }

        a {
            text-decoration: none;
            color: white;
            z-index: 2;
        }

        a:hover {
            text-decoration: underline;
        }

        .error {
            position: relative;
            height: 70vh;
            width: auto;
        }

        .navBar {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="navBar"><a href="/">Back to Home</a></div>
    <div class="error">
        <h1>404</h1>
        <p>There's nothing here.</p>
        <div class="travolta"></div>
        <a href="/">Go to Home</a>
    </div>
</body>

</html>