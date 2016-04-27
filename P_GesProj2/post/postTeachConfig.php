<?php
	session_start();
?>
<?php
	include('../gesprojClass.php');
	
	$gesProj = new gesprojClass();
	
	if(isset($_POST['lastname'],$_POST['firstname'],$_POST['address'],$_POST['email'],$_POST['phone'],$_POST['qualifications']))
	{
		$gesProj->setAddress($_POST['address']);
		$gesProj->setFirstname($_POST['firstname']);
		$gesProj->setLastname($_POST['lastname']);
		$gesProj->setEmail($_POST['email']);
		$gesProj->setPhone($_POST['phone']);
		$gesProj->setQualifications($_POST['qualifications']);
		$gesProj->newStudForm(1);
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