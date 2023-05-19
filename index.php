<?php
$error = $_GET["error"] ?? 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Clone</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- BOOTSTRAP STYLE CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- EXTERNAL CSS -->
    <link rel="stylesheet" href="css/style.css">
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
                <img src="img/icone_twitter.png" />
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="pages/register.php">Register</a></li>
                    <li class="<?= $error == 1 ? 'open' : '' ?>">
                        <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In</a>
                        <ul class="dropdown-menu" aria-labelledby="entrar">
                            <div class="col-md-12">
                                <p>Already have an account?</h3>
                                    <br />
                                <form method="post" action="pages/login.php" id="formLogin">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="user-field" name="user" placeholder="Usuário" />
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control red" id="password-field" name="password" placeholder="Senha" />
                                    </div>

                                    <button type="buttom" class="btn btn-primary" id="btn_login">Sign In</button>

                                    <br /><br />

                                </form>
                                <?php
                                if ($error == 1) {
                                    echo "<strong style='color:#FF0000;'>User or Password Invalid</strong>";
                                }
                                ?>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Welcome to twitter clone</h1>
            <p>See what's happening now...</p>
        </div>

        <div class="clearfix"></div>
    </div>


    </div>

    <!-- JQUERY SCRIPT CDN -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- BOOTSTRAP SCRIPT CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- EXTERNAL SCRIPTS -->
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
</body>

</html>