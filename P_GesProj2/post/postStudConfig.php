<?php
session_start();
?>
<?php
/**
 * Author: carvalhoda
 * Date: 25.04.2016
 * Summary: 
 */
include '../gesprojClass.php';
$newUser = new gesprojClass();

if(isset($_POST['lastname'],$_POST['firstname'],$_POST['address']))
{
    $newUser->setAddress($_POST['address']);
    $newUser->setFirstname($_POST['firstname']);
    $newUser->setLastname($_POST['lastname']);
    $newUser->newStudForm(0);
}
else if(isset($_POST['password1']))
{
    //Get the id of the user
    $ID = $gesProj->getSessionID();

    //Get the new password
    $password = $_POST['password1'];

    //Change the password
    $gesProj->ChangePassword($ID, $password);
}
?>