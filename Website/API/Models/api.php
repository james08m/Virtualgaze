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
    //Get cumputer name
    $req = $DB->prepare('SELECT id FROM computers WHERE computer = ?');
    $req->execute(array($name));
    $asw = $req->fetch();

    return (int)$asw['id'];
}

function AddCumputer($member_id, $computer)
{
    global $DB;

    // Add computer
    $req = $DB->prepare('INSERT into computers(member_id, computer, last_ip) VALUES(:member_id, :computer, :last_ip)');
    $req->execute(array(
        'member_id' => $member_id,
        'cumputer' => htmlspecialchars($computer),
        'last_ip' => GetIp()
    ));
}

function AddUser($computer_id, $user)
{
    global $DB;

    $req = $DB->prepare('INSERT into users(computer_id, username) VALUES(:computer_id, :username)');
    $req->execute(array(
        'computer_id' => $computer_id,
        'username' => htmlspecialchars($user)
    ));


}


function UpdateComputerInfo($computer, $user, $member_id)
{
    global $DB;

    // Check if computer already in member computers database
    $req = $DB->prepare('SELECT COUNT(*) as Nb  FROM computers WHERE computer = :computer AND member_id = :member_id');
    $req->execute(array(
        'cumputer' => $computer,
        'member_id' => $member_id
    ));
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
        AddCumputer($member_id, $computer);

        // Add user
        AddUser(GetComputerIdByName($computer), $user);
    }

    $req->closeCursor();
}