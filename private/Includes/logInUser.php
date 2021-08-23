<?php

include_once $_SERVER["HOME"] . "/private/AutoLoad/autoLoader.php";

$email = $_POST["email"];
$password = $_POST["password"];

$logger = new \private\Classes\LoginSystem\Logger(array(new \private\Classes\LoginSystem\Validators\LoginPasswordValidator($password, $email),
    new \private\Classes\LoginSystem\Validators\LoginEmailValidator($email)));

if ($logger->verify()) {
    $logger->logInUser($email, $password);
    header('Location: http://localhost/test/public/index.php');
} else {
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?smt=1");
   /* echo "<script>
    let alertContainer = document.createElement('div');
alertContainer.classList.add('alert', 'alert-danger', 'alert-dismissible', 'fade', 'show');
alertContainer.setAttribute('role', 'alert');

let alertText = document.createElement('p');
alertText.textContent = 'Wrong email or password';

let alertButton = document.createElement('button');
alertButton.classList.add('btn-close');
alertButton.setAttribute('type', 'button');
alertButton.setAttribute('data-bs-dismiss', 'alert');
alertButton.setAttribute('aria-label', 'Close');

alertContainer.append(alertText, alertButton);


document.getElementById('login-error-container').append(alertContainer);
    </script>";
   */
}
