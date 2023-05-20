<?php

session_start();

$errorUser = isset($_GET["error-user"]) ? $_GET["error-user"] : 0;
$errorEmail = isset($_GET["error-email"]) ? $_GET["error-email"] : 0;
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
                    <li><a href="../index.php">Back To The Home</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container">

        <br /><br />

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Register Now</h3>
            <br />
            <form method="post" action="register-user.php" id="formCadastrarse">
                <div class="form-group">
                    <input type="text" class="form-control" id="usuario" name="user" placeholder="User" required="requiored">
                    <?php
                    if ($errorUser) {
                        echo '<div class="alert alert-danger" role="alert" style="margin-top:1rem;">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>' . "User Already Exists" . '</strong>
        </div>';
                    }
                    ?>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="requiored">
                    <?php
                    if ($errorEmail) {
                        echo '<div class="alert alert-danger" role="alert" style="margin-top:1rem;">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>' . "Email Already Exists" . '</strong>
        </div>';
                    }
                    ?>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="senha" name="password" placeholder="Password" required="requiored">
                </div>

                <button type="submit" class="btn btn-primary form-control">Register</button>
            </form>
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