<?php
require_once "../config/db_class.php";

$user = $_POST["user"];
$email = $_POST["email"];
$password = $_POST["password"];

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = "INSERT INTO users(user, email, password) VALUES('$user', '$email', '$password')";

if (!mysqli_query($link, $sql)) {
}
