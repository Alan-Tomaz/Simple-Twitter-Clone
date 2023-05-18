<?php

require_once "../config/db_class.php";

$user = $_POST["user"];
$password = $_POST["password"];

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = "SELECT * FROM users WHERE user = '$user' AND senha '$password'";

$mysqli_query($link, $sql);
