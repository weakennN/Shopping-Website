<?php
if (isset($_COOKIE["userId"])) {
    header('Location: http://localhost/test/public/index.php');
}
include_once "../private/AutoLoad/autoLoader.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php include "header.php" ?>
<div class="container">
    <h4 class="w-100 mb-5">Login</h4>
    <div id="login-error-container">
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form action="../private/Includes/LoginSystemInclude/logInUser.php" class="row" id="login" method="post">
                <div class="col-lg-12 mt-5" id="email-input">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email">
                </div>
                <div class="col-12 mt-4" id="password-input">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
                <div class="col-12 mt-3" id="password-input">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="rememberMe">
                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                </div>
                <div class="col-12 mt-4">
                    <button id="login-button" type="button" class="btn btn-primary w-50 btn-lg tt">Log in</button>
                    <a href="register.php">
                        <button class="btn btn-success w-50 btn-lg mt-3" type="button">Create new account</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="JS/cartAction.js"></script>
<script src="JS/cartWrapper.js"></script>
<script src="JS/cartItemActions.js"></script>
<script src="JS/validators.js"></script>
<script src="JS/login.js"></script>
<script src="JS/header.js"></script>
</body>
</html>

