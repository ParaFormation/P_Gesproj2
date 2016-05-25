<?php
session_start();
?>
<?php
#Author : voisardth
#Date : 25.04.2016
#Summary : delete former

include("../gesprojClass.php");
$gesProjClass = new gesprojClass();
if(isset($_GET['ID'])) {
    $gesProjClass->DenyFormer($_GET['ID']);
}
else
{
    header("Location : ../formerConfirmPage.php");}
?>
<meta http-equiv="refresh" content="0; url=../formerConfirmPage.php" />
