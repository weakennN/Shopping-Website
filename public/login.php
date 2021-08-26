<?php
// TODO redirect to profile page
if (isset($_COOKIE["userId"])) {
    header('Location: http://localhost/test/public/index.php');
}

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
<?php include $_SERVER["HOME"] . '/public/header.php'; ?>

<div class="container">

    <h4 class="w-100 mb-5">Login</h4>
    <div id="login-error-container">
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form action="../private/Includes/logInUser.php" class="row" id="login" method="post">
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
                    <a href="register.php" type="button" class="btn btn-success w-50 btn-lg mt-3 tt">Create new
                        account</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="JS/validators.js?<?php echo time(); ?>"></script>
<script src="JS/login.js?<?php echo time(); ?>"></script>

</body>
</html>

