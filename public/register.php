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
</head>
<body>
<?php include $_SERVER["HOME"] . "/public/header.php" ?>

<div class="container mt-5">
    <div class="mb-5">
        <h4>Register</h4>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-5">
            <form action="../private/Includes/registerUser.php" method="post" class="row">
                <div class="col-lg-6 col-md-12 mb-3" id="first-name-input">
                    <label for="first-name">First name</label>
                    <input id="first-name" type="text" class="form-control" name="firstName">
                </div>
                <div class="col-lg-6 col-md-12 mb-3" id="last-name-input">
                    <label for="last-name">Last name</label>
                    <input type="text" class="form-control" id="last-name" name="lastName">
                </div>
                <div class="col-12 mb-3" id="email-input">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-12 mb-3" id="password-input">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="col-12 mb-3" id="repeat-password-input">
                    <label for="repeat-password">Repeat password</label>
                    <input type="password" class="form-control" id="repeat-password" name="repeatPassword">
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-primary w-50 btn-lg" id="register-button">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="JS/validators.js? <?php echo time() ?>"></script>
<script src="JS/register.js? <?php echo time() ?>"></script>
</body>
</html>
