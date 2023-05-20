<?php

session_start();

unset($_SESSION["user"]);
unset($_SESSION["email"]);
unset($_SESSION["user-id"]);

header("Location: ../index.php");
