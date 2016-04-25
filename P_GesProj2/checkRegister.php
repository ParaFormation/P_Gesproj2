<?php
session_start();

    include "gesprojClass.php";
    if (isset($_POST['username'], $_POST['passwordConfirm'], $_POST['password1']))
    {
        if($_POST['password1'] == $_POST['passwordConfirm'])
        {
            $gesprojClass = new gesprojClass();
            $gesprojClass->Register($_POST['username'],$_POST['password1']);
        }
        else
        {
            echo 'Les mots de passes ne correspondent pas';
        }
    }
?>
