<?php
session_start();
?>
<?php
/**
 * User: bijelical
 * Date: 21.03.2016
 * Summary: 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Qui êtes vous ? - P_GesProj2</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

	<!-- Navbar -->
    <?php
    include "./gesprojClass.php";
    $class = new gesprojClass();
    include './navbar.php';
    if(isset($_SESSION['user']) && ($class->checkAlreadyRegistered(1) == false) || ($class->checkAlreadyRegistered(2) == false))
    {
        echo'
        <div class="container" >
            <div class="row" >
                <div class="col s12 m12 center " >
                    <h4 > Qui êtes vous ?</h4 >
                </div >
            </div >
            <div class="row">
                <div class="col s12 m12 center" >
                    <a href = "./addStudentInfos.php" class="waves-effect waves-light btn" ><i class="material-icons left" > assignment_ind</i > Élève</a >
                    <a  href = "./addTeacherInfos.php" class="waves-effect waves-light btn" ><i class="material-icons left" > perm_identity</i > Formateur</a >
                </div >
            </div >
        </div >';
    }
    else
    {
        echo 'Vous n\'êtes pas connecté ou avez déjà choisi votre type de compte !';
    }
	?>
	<!-- Footer -->   
	<?php include 'footer.php';?>
		


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</html>
