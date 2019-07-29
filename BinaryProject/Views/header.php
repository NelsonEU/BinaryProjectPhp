<!DOCTYPE html>
<html>
<head>
    <title>Binary Project</title>
    <meta name="google-signin-client_id" content="398953615251-opllhkrv8a95cqpq6lau3tf29gekk119.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Views/Assets/css/graph.css">
    <link rel="stylesheet" type="text/css" href="Views/Assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="Views/Assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="Views/Assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="Views/Assets/css/tournaments.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top justify-content-between">
        <!-- Navbar content -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand navbar-nav" href="index.php"><img class="logo-header" src="Views/Assets/images/logo.png"></a>
        <div id="navbarTogglerDemo03" class="collapse navbar-collapse order-3">
            <ul class="navbar-nav my-2 my-lg-0 ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=tournaments">Tournaments</a>
                </li>
                <li class="nav-item loginLink">
                    <?php if($_SESSION['connectedUser'] != null) { ?>
                    <a class="nav-link" href="index.php?action=logout" onclick="logout()">Sign out</a>
                    <?php } else { ?>
                    <a class="nav-link" href="index.php?action=login">Sign in</a>
                    <?php } ?>

                </li>
            </ul>
        </div>
    </nav>
</header>