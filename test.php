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
</head>
<body>

<div class="container">
    <button type="button" id="btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAddressModal">
        Launch static backdrop modal
    </button>
    <!-- Modal -->


    <button type="button" id="btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAddressModal">
        Launch static backdrop modal
    </button>



    <form action="private/Includes/test.php" method="post">
        <input name="test" type="checkbox" value="2" checked>
        <input name="test" type="checkbox" value="1" checked>
        <button type="submit">click me</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

<script>
    document.getElementById("btn").addEventListener("click", function () {
        document.getElementById("name").value = "smt";
    })
</script>
</body>
</html>