<?php
session_start();

    include "gesprojClass.php";
    if (isset($_POST['username'], $_POST['confirmPassword'], $_POST['password']))
    {
        if($_POST['password'] == $_POST['confirmPassword'])
        {
            $gesprojClass = new gesprojClass();
            $gesprojClass->Register($_POST['username'],$_POST['password']);
        }
        else
        {
            echo 'Les mots de passes ne correspondent pas';
        }
    }
?>