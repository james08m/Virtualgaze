<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 5:54 AM
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

function GetNbComputers($com_key)
{
    global $DB;
    $req = $DB->prepare('SELECT COUNT(*) as Nb FROM computers WHERE com_key = ?');
    $req->execute(array($com_key));
    $asw = $req->fetch();

    return (int)$asw['Nb'];
}

function GetNbUsers($computer_id)
{
    global $DB;
    $req = $DB->prepare('SELECT COUNT(*) as Nb FROM users WHERE computer_id = ?');
    $req->execute(array($computer_id));
    $asw = $req->fetch();

    return (int)$asw['Nb'];
}

function GetComputers($com_key)
{
    global $DB;
    $req = $DB->prepare('SELECT * FROM computers WHERE com_key = ?');
    $req->execute(array($com_key));
    $asw = $req->fetchAll();

    return $asw;
}

function GetUsers($computer_id)
{
    global $DB;
    $req = $DB->prepare('SELECT * FROM users WHERE computer_id = ?');
    $req->execute(array($computer_id));
    $asw = $req->fetchAll();

    return $asw;
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
    $req = $DB->prepare('SELECT id FROM users WHERE computer_id = ? AND username = ?');
    $req->execute(array($computer_id, $user));
    $asw = $req->fetch();

    return (int)$asw['id'];
}

function GetUsernameById($username_id)
{
    global $DB;
    $req = $DB->prepare('SELECT username FROM users WHERE id = ? ');
    $req->execute(array($username_id));
    $asw = $req->fetch();

    return $asw['username'];
}

function GetLog($username_id)
{
    global $DB;
    $req = $DB->prepare('SELECT * FROM logs WHERE username_id = ? ORDER BY id DESC LIMIT 0,1');
    $req->execute(array($username_id));
    $asw = $req->fetchAll();

    return $asw;
}