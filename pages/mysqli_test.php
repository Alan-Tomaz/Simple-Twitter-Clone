<?php

require_once "../config/db_class.php";

$objDb = new Database();
$link = $objDb->connectMysql();

$sql = "SELECT * FROM users";

$resultId = mysqli_query($link, $sql);

if (!$resultId) {
    echo "Query execution error";
} else {
    $dataUser = array();
    while ($linha = mysqli_fetch_array($resultId, MYSQLI_ASSOC)) {
        $dataUser[] = $linha;
    }
    echo "<pre>";
    var_dump($dataUser);
    echo "</pre>";
}
