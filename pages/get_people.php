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

$sql = "SELECT * FROM users WHERE user LIKE '%$personName%' AND id <> '$userId'";

$resultId = mysqli_query($link, $sql);

if ($resultId) {
    while ($record = mysqli_fetch_array($resultId, MYSQLI_ASSOC)) {
        echo "<a href='#' class='list-group-item'>";
        echo "<strong>" . $record['user'] . "</strong> <small> - " . $record['email'] . " </small>";
        echo "<p class='list-group-item-text pull-right'>";
        echo "<button type='button' class='btn btn-default btn-follow' id='btn-follow-" . $record["id"] . "' data-id-user='" . $record["id"] . "'>Follow</button>";
        echo "<button type='button' class='btn btn-primary btn-unfollow' id='btn-unfollow-" . $record["id"] . "' data-id-user='" . $record["id"] . "' style='display:none;'>Unfollow</button>";
        echo "</p>";
        echo "<div class='clearfix'></div>";
        echo "</a>";
    }
} else {
    echo 'Error querying people in the database';
}
