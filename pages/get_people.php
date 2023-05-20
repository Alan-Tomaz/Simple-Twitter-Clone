<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: home.php");
    die();
}

require_once "../config/db_class.php";

$userId = $_SESSION["user-id"];
$personName = $_POST["name-person"];

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = "SELECT u.*, uf.* FROM users AS u LEFT JOIN users_followers AS uf ON (uf.id_user = $userId AND u.id = uf.id_user_following) WHERE u.user LIKE '%$personName%' AND u.id <> $userId;";

$resultId = mysqli_query($link, $sql);

if ($resultId) {
    while ($record = mysqli_fetch_array($resultId, MYSQLI_ASSOC)) {
        echo "<a href='#' class='list-group-item'>";
        echo "<strong>" . $record['user'] . "</strong> <small> - " . $record['email'] . " </small>";
        echo "<p class='list-group-item-text pull-right'>";

        $isFollowingUser = isset($record["id_user_follower"]) && !empty($record["id_user_follower"]) ? true : false;
        $btnFollowDisplay = "block";
        $btnUnfollowDisplay = "block";
        if ($isFollowingUser == false) {
            $btnUnfollowDisplay = "none";
        } else {
            $btnFollowDisplay = "none";
        }
        echo "<button type='button' class='btn btn-default btn-follow' id='btn-follow-" . $record["id"] . "' data-id-user='" . $record["id"] . "' style='display:" . $btnFollowDisplay . ";'>Follow</button>";
        echo "<button type='button' class='btn btn-primary btn-unfollow' id='btn-unfollow-" . $record["id"] . "' data-id-user='" . $record["id"] . "' style='display:" . $btnUnfollowDisplay . ";'>Unfollow</button>";
        echo "</p>";
        echo "<div class='clearfix'></div>";
        echo "</a>";
    }
} else {
    echo 'Error querying people in the database';
}
