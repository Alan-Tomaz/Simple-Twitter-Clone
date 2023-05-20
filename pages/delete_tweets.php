<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: home.php");
    die();
}

require_once "../config/db_class.php";

$userId = $_SESSION["user-id"];

$tweetId = $_POST["tweetIdDelete"];
echo "DELETED";

if ($tweetId == '' && $userId == '') {
    die();
}

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = "DELETE FROM tweets WHERE id_user = $userId AND id_tweet = $tweetId";

mysqli_query($link, $sql);
