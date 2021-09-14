<?php

use private\Classes\Common\Decrypt;

if (isset($_GET["error"])) {
    $errorMessage = Decrypt::decrypt($_GET['error']);
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              <p class='m-0' style='font-size: 23px'>$errorMessage</p>
        </div>";
}