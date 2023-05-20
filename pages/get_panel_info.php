<?php

session_start();

require_once "../config/db_class.php";

$objDb = new Database();
$link = $objDb->connectMysql();

$idUser = $_SESSION["user-id"];

//Get the amount of tweets
$getTweetQuery = "SELECT COUNT(*) AS tweets_qnty FROM tweets WHERE id_user = $idUser";

//GET TWEETS COUNT
$resultIdTweetsQuery = mysqli_query($link, $getTweetQuery);

$qntyTweets = 0;

if ($resultIdTweetsQuery) {
    $record = mysqli_fetch_array($resultIdTweetsQuery, MYSQLI_ASSOC);

    $qntyTweets = $record["tweets_qnty"];
} else {
    echo "Error executing the query";
    die();
}

//GET FOLLOWERS COUNT
$getFollowersQuery = "SELECT COUNT(*) AS followers_qnty FROM users_followers WHERE id_user_following = $idUser";

$resultIdFollowersQuery = mysqli_query($link, $getFollowersQuery);

$qntyFollowers = 0;

if ($resultIdFollowersQuery) {
    $record = mysqli_fetch_array($resultIdFollowersQuery, MYSQLI_ASSOC);

    $qntyFollowers = $record["followers_qnty"];
} else {
    echo "Error executing the query";
    die();
}

$result = new stdClass();
$result->tweetsQnty = $qntyTweets;
$result->followersQnty = $qntyFollowers;
//Print the result of object in JSON format
echo (json_encode($result, JSON_PRETTY_PRINT));
