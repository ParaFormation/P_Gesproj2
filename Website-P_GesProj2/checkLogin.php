<?php
/**
 * Author: carvalhoda
 * Date: 11.04.2016
 * Summary: 
 */

    if (isset($_POST['username'], $_POST['password']))
    {
        include "gesprojClass.php";
        $myusername=$_POST['username'];
        $mypassword=$_POST['password'];
        $newLogin= new gesprojClass();
        $newLogin->Login($myusername,$mypassword);
    }
?>