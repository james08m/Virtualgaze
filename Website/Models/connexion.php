<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 4:49 AM
 */

session_start();
require("database.php");

// Check if every user has sent every POST var
if( isset($_POST['email']) AND isset($_POST['password']))
{
    global $DB;
    $req = $DB->prepare('SELECT * FROM members WHERE email = ? LIMIT 1');
    $req->execute(array($_POST['email']));
    $data = $req->fetch();

    if($data['password'] == sha1($_POST['password']))
    {
        // Create session vars
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['com_key'] = $data['com_key'];
        $_SESSION['firstname'] = $data['firstname'];
        $_SESSION['lastname'] = $data['lastname'];
    }
    else
    {
        header('Location: ../connexion.php?code=psw');
    }
    $req->closeCursor();
    header('Location: ../member.php');
}
else
{
    header('Location: ../inscription.php');
}
?>