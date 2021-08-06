<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/navBar.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5" id="smt">
    <div class="container" id="navContainer">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline w-75">
                <div class="input-group input-group-append">
                    <input class="flex-fill form-control" type="search" placeholder="Search"
                           aria-label="Search">
                    <button type="submit">
                        <img src="recourses/images/5017679.png" alt="">
                    </button>
                </div>
            </form>
        </div>
        <div class="nav-button account-btn mx-5">
            <i class="fas fa-user-circle fa-2x"></i>
        </div>
        <div class="nav-button favourite-btn">
            <i class="fas fa-heart fa-2x"></i>
        </div>
        <div class="nav-button shopping-cart-btn mx-5" id="cart">
            <i class="fas fa-shopping-cart fa-2x"></i>
        </div>
    </div>
</nav>

</body>

</html>
