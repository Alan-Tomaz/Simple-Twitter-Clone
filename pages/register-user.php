<?php
require_once "../config/db_class.php";

$user = $_POST["user"];
$email = $_POST["email"];
$password = md5($_POST["password"]);

$objDb = new Database();
$link = $objDb->connectMysql();

$userExist = false;
$emailExist = false;

//verify if user already exists
$userVerifyQuery = "SELECT * FROM users where user = '$user'";
if ($resultId = mysqli_query($link, $userVerifyQuery)) {

    $userData = mysqli_fetch_array($resultId);

    if (isset($userData["user"])) {
        echo "User Already Exists";
        $userExist = true;
    }
} else {
    echo "Error trying to locate user record";
}
//verify if email already exists
$emailVerifyQuery = "SELECT * FROM users where email = '$email'";
if ($resultId = mysqli_query($link, $emailVerifyQuery)) {

    $emailData = mysqli_fetch_array($resultId);

    if (isset($emailData["email"])) {
        echo "<br>";
        echo "Email Already Exists";
        $emailExist = true;
    }
} else {
    echo "Error trying to locate user record";
}

if ($userExist || $emailExist) {
    $getReturn = '';

    if ($userExist) {
        $getReturn = 'error-user=1&';
    }

    if ($emailExist) {
        $getReturn .= 'error-email=1&';
    }

    header("Location: register.php?" . $getReturn);
} else {
    $sql = "INSERT INTO users(user, email, password) VALUES('$user', '$email', '$password')";

    if (!mysqli_query($link, $sql)) {
        echo "Registry error";
    }
}
