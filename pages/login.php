<?php

session_start();

require_once "../config/db_class.php";

$user = $_POST["user"];
$password = md5($_POST["password"]);

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = "SELECT * FROM users WHERE user = '$user' AND password = '$password'";

$resultId = mysqli_query($link, $sql);

if (!$resultId) {
    echo "Query execution error";
} else {
    $dataUser = mysqli_fetch_array($resultId);

    if (isset($dataUser["user"])) {
        $_SESSION["user-id"] = $dataUser["id"];
        $_SESSION["user"] = $dataUser["user"];
        $_SESSION["email"] = $dataUser["email"];

        header("Location: home.php");
    } else {
        header("Location: ../index.php?error=1");
    }
}
