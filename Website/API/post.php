<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 1:13 AM
 */

include('Models/api.php');

// If all datas are in the request
if(isset($_POST['com_key']) and   isset($_POST['computer']) and  isset($_POST['username']) and  isset($_POST['datas']) )
{
    // Add computer and user if it need to
    UpdateComputerInfo($_POST['computer'], $_POST['username'], $_POST['com_key']);

    // Get computer id
    $computer_id = GetComputerIdByName($_POST['computer']);

    // Add informations to logs
    AddLog($_POST['com_key'],$computer_id, GetUserIdByName($computer_id,$_POST['username']), $_POST['datas']);
}
else // Missing datas
{

}