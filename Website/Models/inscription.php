<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 12:47 AM
 */

require("database.php");

// Check if every user has sent every POST var
if( isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['firstname']) AND isset($_POST['lastname']) )
{
    global $DB;
    $req = $DB->prepare('INSERT into members(email, password, firstname, lastname) VALUES(?, ?, ?, ?)');
    $req->execute(array(
        htmlspecialchars($_POST['email']),
        sha1(htmlspecialchars($_POST['password'])),
        htmlspecialchars($_POST['firstname']),
        htmlspecialchars($_POST['lastname'])
    ));

    header('Location: ../connexion.php?code=insc');
}
else
{
    // Redirect to inscription if somethings missing
    header('Location: ../inscription.php');
}