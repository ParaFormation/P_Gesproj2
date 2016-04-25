<?php
	session_start();
?>
<?php
	include('../gesprojClass.php');
	
	$gesProj = new gesprojClass();
	
	if(isset($_POST['lastname'],$_POST['firstname'],$_POST['address'],$_POST['email'],$_POST['phone'],$_POST['qualifications']))
	{
		$gesProj->setAddress($_POST['address']);
		$gesProj->setFirstname($_POST['lastname']);
		$gesProj->setLastname($_POST['firstname']);
		$gesProj->setEmail($_POST['email']);
		$gesProj->setPhone($_POST['phone']);
		$gesProj->setQualifications($_POST['qualifications']);
		$gesProj->newStudForm(1);
	}

?>