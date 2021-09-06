<?php
include_once "../private/Includes/checkLogin.php";
include_once "../private/AutoLoad/autoLoader.php"
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
    <link rel="stylesheet" href="style/profile.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php include_once "header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-3 p-0 pe-0 pe-md-4">
            <?php include_once "profileNavigation.php" ?>
        </div>
        <div class="col-md-9 p-0">
            <div class="profile-main-content mt-3 mt-md-0 p-3">
                <h2 class="display-5">General Information</h2>
                <h4 class="display-6 mt-3">Hello Test !</h4>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="JS/header.js"></script>
<script src="JS/cartAction.js"></script>
<script src="JS/cartItemActions.js"></script>
<script src="JS/cartWrapper.js"></script>
</body>
</html>
