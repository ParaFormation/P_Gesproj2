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
    $newUser->setFirstname($_POST['lastname']);
    $newUser->setLastname($_POST['firstname']);
    $newUser->newStudForm(0);
}

?>