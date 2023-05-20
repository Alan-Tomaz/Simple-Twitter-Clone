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
    <title>Twitter Clone</title>
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
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4><?= $_SESSION["user"] ?></h4>
                    <hr>
                    <div class="col-md-6">
                        TWEETS <br> 1
                    </div>
                    <div class="col-md-6">
                        FOLLOWERS <br> 1
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form id="form-tweet" class="input-group">
                        <input type="text" name="tweet-text" id="tweet-text" class="form-control" placeholder="What is happening now?" maxlength="140">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="btn-tweet">Tweet</button>
                        </span>
                    </form>
                </div>
            </div>
            <div id="tweets" class="list-group">

            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4><a href="#">Search People</a></h4>
                </div>
            </div>
        </div>

    </div>


    </div>

    <!-- JQUERY SCRIPT CDN -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- BOOTSTRAP SCRIPT CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- EXTERNAL SCRIPTS -->
    <script src="../js/main.js"></script>
    <script src="../js/home.js"></script>
</body>

</html>