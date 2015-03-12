<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 5:04 AM
 */
	session_start();

	// If a session is active
	if(isset($_SESSION['id']))
    {
        //remove all the variables in the session
        session_unset();

        // destroy the session
        session_destroy();
    }

    header('Location: ../index.php');
?>