<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: home.php");
    die();
}

require_once "../config/db_class.php";

$userId = $_SESSION["user-id"];

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = "SELECT DATE_FORMAT(t.inclusion_date, '%d %b %Y %l:%i%p') AS inclusion_date_formated, t.tweet, t.id_tweet, t.id_user, u.user FROM  tweets AS t JOIN users AS u ON (t.id_user = u.id) ";
$sql .= "WHERE t.id_user = $userId ";
$sql .= "OR id_user IN (SELECT id_user_following FROM users_followers WHERE id_user = $userId) ";
$sql .= "ORDER BY t.inclusion_date DESC ";

$resultId = mysqli_query($link, $sql);

if ($resultId) {
    while ($record = mysqli_fetch_array($resultId, MYSQLI_ASSOC)) {
        echo "<a href='#' class='list-group-item'>";
        echo "<h4 class='list-group-item-heading'>" . $record['user'] . " <small> - " . $record["inclusion_date_formated"] . "</small></h4>";
        echo "<div class='list-group-item-text'><p class='pull-left'>" . $record['tweet'] . "</p>";
        if ($record["id_user"] == $userId) {
            echo "<p class='pull-right'>";
            $canDelete = isset($record["id_tweet"]) && !empty($record["id_tweet"]) ? true : false;
            $btnDeleteDisplay = "block";
            if ($canDelete == false) {
                $btnDeleteDisplay = "none";
            }
            echo "<button type='button' class='btn btn-danger btn-delete-tweet' id='btn-delete-tweet-" . $record["id_tweet"] . "' data-id-tweet='" . $record["id_tweet"] . "' style='display:" . $btnDeleteDisplay . ";'>Delete Tweet</button>";
            echo "</p>";
        }
        echo "</div>";
        echo "<div class='clearfix'></div>";
        echo "</a>";
    }
} else {
    echo 'Error querying tweets in the database';
}
