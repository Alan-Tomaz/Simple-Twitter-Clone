<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: home.php");
    die();
}

require_once "../config/db_class.php";

$tweetText = $_POST["tweet-text"];
$userId = $_SESSION["user-id"];

if ($tweetText != '' && $userId != '') {

    $objDb = new Database();
    $link = $objDb->connectMysql();

    $sql = " INSERT INTO tweets (id_user, tweet) VALUES ($userId,'$tweetText')";

    mysqli_query($link, $sql);
}
