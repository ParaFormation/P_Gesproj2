<?php
session_start();

/**
 * Author: carvalhoda
 * Date: 11.04.2016
 * Summary: 
 */

include "gesprojClass.php";
    if (isset($_POST['username'], $_POST['password']))
    {

        $myusername=$_POST['username'];
        $mypassword=$_POST['password'];
        $newLogin= new gesprojClass();
        $newLogin->Login($myusername,$mypassword);
    }
?>