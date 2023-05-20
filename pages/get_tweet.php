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

$sql = "SELECT DATE_FORMAT(t.inclusion_date, '%d %b %Y %l:%i%p') AS inclusion_date_formated, t.tweet, u.user FROM  tweets AS t JOIN users AS u ON (t.id_user = u.id) WHERE t.id_user = '$userId' ORDER BY t.inclusion_date DESC";

$resultId = mysqli_query($link, $sql);

if ($resultId) {
    while ($record = mysqli_fetch_array($resultId, MYSQLI_ASSOC)) {
        echo "<a href='#' class='list-group-item'>";
        echo "<h4 class='list-group-item-heading'>" . $record['user'] . " <small> - " . $record["inclusion_date_formated"] . "</small></h4>";
        echo "<p class='list-group-item-text'>" . $record['tweet'] . "</p>";
        echo "</a>";
    }
} else {
    echo 'Error querying tweets in the database';
}
