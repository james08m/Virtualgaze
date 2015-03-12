<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 1:22 AM
 */

require('database.php');

function GetIp()
{
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif(isset($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip  = $_SERVER['HTTP_CLIENT_IP'];
    }
    else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}



function GetComputerIdByName($name)
{
    global $DB;
    //Get cumputer id
    $req = $DB->prepare('SELECT id FROM computers WHERE computer = ?');
    $req->execute(array($name));
    $asw = $req->fetch();

    return (int)$asw['id'];
}

function GetUserIdByName($computer_id, $user)
{
    global $DB;
    //Get cumputer id
    $req = $DB->prepare('SELECT id FROM users WHERE computer_id = ? AND username = ?');
    $req->execute(array($computer_id, $user));
    $asw = $req->fetch();

    return (int)$asw['id'];
}

function AddCumputer($com_key, $computer)
{
    global $DB;

    // Add computer
    $req = $DB->prepare('INSERT into computers(com_key, computer, last_ip) VALUES(?, ?, ?)');
    $req->execute(array($com_key, htmlspecialchars($computer), GetIp()));

    echo "Computer added";
}

function AddUser($computer_id, $user)
{
    global $DB;

    $req = $DB->prepare('INSERT into users(computer_id, username) VALUES(?, ?)');
    $req->execute(array($computer_id, htmlspecialchars($user)));

    echo "User added";
}

function AddLog($com_key, $computer_id, $user_id, $datas)
{
    global $DB;

    $req = $DB->prepare('INSERT INTO logs(com_key, computer_id, username_id, datas, ip) VALUES(?, ?, ?, ?, ?)');
    $req->execute(array(htmlspecialchars($com_key), htmlspecialchars($computer_id), htmlspecialchars($user_id), $datas, GetIp()));
    echo "information added";
}


function UpdateComputerInfo($computer, $user, $com_key)
{
    global $DB;

    // Check if computer already in member computers database
    $req = $DB->prepare('SELECT COUNT(*) as Nb  FROM computers WHERE computer = ? AND com_key = ?');
    $req->execute(array($computer, $com_key));
    $asw = $req->fetch();

    // If computer already present
    if((int)$asw['Nb'] == 1)
    {
        // Check if user already in member users database
        $req = $DB->prepare('SELECT COUNT(*) as Nb FROM users WHERE username = :username AND computer_id = :computer_id');
        $req->execute(array(
            'username' => htmlspecialchars($user),
            'computer_id' => GetComputerIdByName($computer)
        ));
        $asw = $req->fetch();


        // If user already present
        if((int)$asw['Nb'] == 1)
        {
            // Nothing to be done
            echo "Nothing to be done";
        }
        else // If user not present
        {

            // Add user
            AddUser(GetComputerIdByName($computer), $user);
        }
    }
    else // Computer not present
    {
        // Add computer
        AddCumputer($com_key, $computer);

        // Add user
        AddUser(GetComputerIdByName($computer), $user);
    }

    $req->closeCursor();
}