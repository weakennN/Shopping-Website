<?php
include 'Classes/Database/Database.php';
include 'Classes/ProductLoader.php';
include 'Classes/Database/ProductManagement.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/navBar.css">
</head>

<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <?php include 'Includes/loadMainProducts.php'; ?>
    </div>
    <nav>
        <ul class="pagination justify-content-end">
            <li class="page-item">
                <a href="#" class="page-link">
                    <span>&laquo;</span>
                </a>
            </li>
            <li class="page-item active">
                <a href="index.php?page=1" class="page-link">
                    1
                </a>
            </li>
            <li class="page-item">
                <a href="index.php?page=2" class="page-link">
                    2
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">
                    3
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">
                    4
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">
                    5
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">
                    <span>&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    <?php include_once "Includes/dbTest.php"; ?>
</div>

</body>

</html>