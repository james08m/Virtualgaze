<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 6:43 AM
 */
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("Location : index.php");
    }
    if(!isset($_GET['username_id']))
    {
        header("Location : member.php");
    }
    include('Models/functions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Virtualgaze | <?php echo GetUsernameById($_GET['username_id']);?></title>
    <meta name="description" content="Virtualgaze est un logiciel de surveillance d'ordinateur qui vous permet de garder un oeil sur vos appareils à partir de votre compte." />
    <meta name="keywords" content="" />
    <meta property="og:title" content="Virtualgaze | <?php echo GetUsernameById($_GET['username_id']);?>" />
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

<div class="container-fluid">
    <div class="row-fluid">
        <?php include('Includes/sidebar.php');?>

        <div class="col-sm-10">
            <?php
                $log = GetLog($_GET['username_id']);
                echo $log[0][4];
            ?>
        </div>
     </div>
</div>