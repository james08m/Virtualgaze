<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 1:21 AM
 */

$DB_DIRECTION = "mysql:host=localhost;dbname=virtualgaze";
$DB_USER = "root";
$DB_PASS = "";
$PDO_OPTIONS[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
/*
$DB_DIRECTION = "mysql:host=104.236.51.98;dbname=WorkTrade";
$DB_USER = "client";
$DB_PASS = "wt8";
$PDO_OPTIONS[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
*/
try
{
    $DB = new PDO($DB_DIRECTION, $DB_USER, $DB_PASS, $PDO_OPTIONS);
}
catch (Exception $e)
{
    die('ERROR : ' . $e->getMessage());
}

?>