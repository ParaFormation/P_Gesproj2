<?php

include './gesprojClass.php';



//verifications
if(isset($_POST['group1'], $_POST['group2'],
 $_POST['group3'], $_POST['group4'],
 $_POST['group5'], $_POST['group6'],
 $_POST['group7'], $_POST['group8'],
 $_POST['group9'], $_POST['group10'],
 $_POST['group11'], $_POST['comment'],
 $_POST['formation']))
{
	$gesprojClass = new gesprojClass();
	
	$gesprojClass->setValQ1($_POST['group1']);
	$gesprojClass->setValQ2($_POST['group2']);
	$gesprojClass->setValQ3($_POST['group3']);
	$gesprojClass->setValQ4($_POST['group4']);
	$gesprojClass->setValQ5($_POST['group5']);
	$gesprojClass->setValQ6($_POST['group6']);
	$gesprojClass->setValQ7($_POST['group7']);
	$gesprojClass->setValQ8($_POST['group8']);
	$gesprojClass->setValQ9($_POST['group9']);
	$gesprojClass->setValQ10($_POST['group10']);
	$gesprojClass->setValQ11($_POST['group11']);
	$gesprojClass->setComment(htmlspecialchars($_POST['comment']));
	$gesprojClass->setFormationID($_POST['formation']);
	
	$gesprojClass->addSurveyResult();
	
}
else
{
	echo('missing infos');
}


?>