<?php
$page_not_found = true;
if ($page_not_found) {
    header('This is not the page you are looking for', true, 404);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="../public/css/navbar.css?v=<?php echo time(); ?>">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            text-align: center;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            box-sizing: border-box;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            background: url('https://assets-9gag-fun.9cache.com/s/fab0aa49/033037194a549b0bf83e2ac4ba90706a52a9132e/static/dist/web6/img/404/bg.gif') center center no-repeat;
            background-size: cover;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-size: 15vw;
            margin: 0;
            padding: 0;
        }

        p {
            font-size: 125%;
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border: 2px solid white;
            margin: 10px;
            display: inline-block;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: white;
            color: black;
        }

        .navBar {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 3;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>404</h1>
        <p>There's nothing here.</p>
        <a href="home.php">Go to Home</a>
    </div>
</body>

</html>