<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: home.php");
    die();
}

require_once "../config/db_class.php";

$userId = $_SESSION["user-id"];
var_dump($_POST);
$followIdUser = $_POST["followIdUser"];

if ($followIdUser == '' && $userId == '') {
    die();
}

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = " INSERT INTO users_followers (id_user, id_user_following) VALUES ($userId, $followIdUser)";

mysqli_query($link, $sql);
