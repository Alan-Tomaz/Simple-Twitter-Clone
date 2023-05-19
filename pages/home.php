<?php
session_start();

if (!isset($_SESSION["user"]) && !isset($_SESSION["email"]))
    header("Location: ../index.php")
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter clone</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <!-- BOOTSTRAP STYLE CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- EXTERNAL CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="../img/icone_twitter.png" />
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container">

        <br /><br />

        <div class="col-md-4"></div>
        <div class="col-md-4">
            User authenticated
            <br>
            <?= $_SESSION["user"] ?>
            <br>
            <?= $_SESSION["email"] ?>
        </div>
        <div class="col-md-4"></div>

        <div class="clearfix"></div>
        <br />
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>

    </div>


    </div>

    <!-- JQUERY SCRIPT CDN -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- BOOTSTRAP SCRIPT CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- EXTERNAL SCRIPTS -->
    <script src="../js/main.js"></script>
</body>

</html>