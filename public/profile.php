<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/profile.css?<?php echo time(); ?>">
</head>
<body>
<?php include_once "header.php" ?>

<div class="container">
    <div class="row gx-5">
        <div class="col-md-3 p-0 pe-0 pe-md-4">
           <?php include_once "profileNavigation.php"?>
        </div>
        <div class="col-md-9 p-0">
            <div class="profile-main-content mt-3 mt-md-0 p-3">
                <h2 class="display-5">General Information</h2>
                <h4 class="display-6 mt-3">Hello Test !</h4>
            </div>
        </div>
    </div>
</div>
</body>
</html>
