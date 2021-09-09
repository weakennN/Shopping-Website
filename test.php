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
    <link rel="stylesheet" href="public/style/addresses.css">
</head>
<body>
<style>
    input {
        transform: scale(1.3);
        border-color: #2a7af5 !important;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-column address-container pb-1" id="address-container">
                <div class="d-flex flex-row">
                    <div class="form-check mt-4 me-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1"></label>
                    </div>
                    <div class="card border-0 address w-100" id="40">
                        <div class="card-body p-0">
                            <h5 class="card-title">Lyuboslav Medarov</h5>
                            <p class="card-text m-auto m-0">0885373254</p>
                            <p class="card-text m-0">Stipon</p>
                            <p class="card-text m-0 ">Bulgaria - Ihtiman</p>
                            <div class="mt-3 d-flex flex-row">
                                <button data-bs-target="#editAddressModal" data-bs-toggle="modal" type="button"
                                        class="btn modify-address-btn btn-primary me-2">Edit
                                </button>
                                <button type="button" class="btn modify-address-btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="form-check mt-4 me-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1"></label>
                    </div>
                    <div class="card border-0 address w-100" id="40">
                        <div class="card-body p-0">
                            <h5 class="card-title">Lyuboslav Medarov</h5>
                            <p class="card-text m-auto m-0">0885373254</p>
                            <p class="card-text m-0">Stipon</p>
                            <p class="card-text m-0 ">Bulgaria - Ihtiman</p>
                            <div class="mt-3 d-flex flex-row">
                                <button data-bs-target="#editAddressModal" data-bs-toggle="modal" type="button"
                                        class="btn modify-address-btn btn-primary me-2">Edit
                                </button>
                                <button type="button" class="btn modify-address-btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>