<?php

if (isset($_POST["rememberMe"])){
    echo "remember me clicked";
}

echo $_POST["email"];
echo $_POST["password"];
