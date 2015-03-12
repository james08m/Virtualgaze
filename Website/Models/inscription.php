<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 12:47 AM
 */

require("database.php");

// Check if every user has sent every POST var
if( isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['name']) AND isset($_POST['lastname']) )
{
    global $DB;
    $req = $DB->prepare('INSERT into Account(Email, Password, FirstName, LastName) VALUES(:Email, :Password, :FirstName, :LastName)');
    $req->execute(array(
        'Email' => htmlspecialchars($_POST['Email']),
        'Password' => sha1(htmlspecialchars($_POST['Password'])), // sha1 is a haching function
        'FirstName' => htmlspecialchars($_POST['FirstName']),
        'LastName' => htmlspecialchars($_POST['LastName'])
    ));

    header('Location: ../connexion.php?code=insc');
}
else
{
    // Redirect to inscription if somethings missing
    header('Location: ../inscription.php');
}