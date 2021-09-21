<?php include_once $_SERVER['HOME'] . "/private/AutoLoad/autoLoader.php"; ?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/error404.css">
</head>
<body>
<?php include_once "header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1 class="error-text">Oops!</h1>
                <h2 class="error-text">404 Not Found</h2>
                <div>
                    <p class="m-0 error-details">We couldn't find the page you are looking for</p>
                </div>
                <a href="index.php" class="error-actions">
                    <button style="width: 200px" type="button" class="btn btn-primary btn-lg mt-4">Homepage</button>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="JS/cartWrapper.js"></script>
<script src="JS/cartAction.js"></script>
<script src="JS/cartItemActions.js"></script>
<script src="JS/header.js"></script>
</body>
</html>
