<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 1:13 AM
 */

include('Models/api.php');

// If all datas are in the request
if(isset($_POST['member_id']) and isset($_POST['key']) and   isset($_POST['computer']) and  isset($_POST['username']) and  isset($_POST['data']) )
{
    // Add computer and user if it need to
    UpdateComputerInfo($_POST['computer'], $_POST['username'], $_POST['member_id']);
}
else // Missing datas
{

}