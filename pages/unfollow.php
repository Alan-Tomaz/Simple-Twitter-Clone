<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: home.php");
    die();
}

require_once "../config/db_class.php";

$userId = $_SESSION["user-id"];
var_dump($_POST);
$unfollowIdUser = $_POST["unfollowIdUser"];

if ($unfollowIdUser == '' && $userId == '') {
    die();
}

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = "DELETE FROM users_followers WHERE id_user = $userId AND id_user_following = $unfollowIdUser";

mysqli_query($link, $sql);
