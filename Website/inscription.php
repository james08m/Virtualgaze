<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 4:10 AM
 */
    session_start();
?>

<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtualgaze | Inscription</title>
    <meta name="description" content="Virtualgaze est un logiciel de surveillance d'ordinateur qui vous permet de garder un oeil sur vos appareils à partir de votre compte." />
    <meta name="keywords" content="" />
    <meta property="og:title" content="Virtualgaze | Inscription" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="virtualgaze.hol.es" />
    <meta property="og:site_name" content="Virtualgaze" />
    <meta property="og:description" content="Virtualgaze est un logiciel de surveillance d'ordinateur qui vous permet de garder un oeil sur vos appareils à partir de votre compte." />
    <meta property="og:image" content="" />
    <link rel="shortcut icon" href="" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'Includes/nav.php'; ?>
    <div class="container">
        <h2>Inscription</h2>
        <form role="form" method="post" action="Models/inscription.php">

            <div class="form-group">
                <label for="email">Adresse courriel:</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrer courriel" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrer mot de passe" required>
            </div>
            <div class="form-group">
                <label for="passwordconf">Confirmer mot de passe:</label>
                <input type="password" class="form-control" id="passwordconf" name="passwordconf" placeholder="Confirmer mot de passe" required>
            </div>
            <div class="form-group">
                <label for="firstname">Prénom:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Entrer prénom" required>
            </div>
            <div class="form-group">
                <label for="lastname">Nom de famille:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter nom de famille" required>
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> S'inscrire</button>
        </form>
        <hr>
    </div>
</body>