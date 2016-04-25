<?php
session_start();
?>
<?php
/**
 * Created by PhpStorm.
 * User: P4R4DiSi4C
 * Date: 21.04.2016
 * Time: 18:50
 */
include "./gesprojClass.php";

if(isset($_SESSION['user']))
{
    $class = new gesprojClass();
    if($class->checkAlreadyRegistered(1) == false && $class->checkAlreadyRegistered(2) == false)
    {
        header("location:accountTypeSelection.php");
    }
    else
    {
        if($class->checkAlreadyRegistered(1) == true)
        {
            header("location:addStudentInfos.php");
        }
        else
        {
            if($class->checkAlreadyRegistered(2) == true)
            {
                header("location:addTeacherInfos.php");
            }
        }
    }
}
else
{
    echo 'Pas connecté';
}