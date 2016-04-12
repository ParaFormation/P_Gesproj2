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
  <title>Accueil - P_GesProj2</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <?php
        include './navbar.php';
    ?>
 <div class="container">
    <div class="section">
        <?php
        include 'login.php';
		
		if(isset($_GET['res']))
		{
			if($_GET['res'] == 0)
			{
				echo('<div class="card-panel white-text teal lighten-2"><h4>Un nouvel utilisateur a été ajouté avec succès !</h4></div>
					  <div class="center" ><a class="waves-effect waves-light btn teal lighten-2" href="index.php">Retour à la page d\'accueil</a></div>');
			}
			else if($_GET['res'] == 1)
			{
				echo('<div class="card-panel white-text red darken-1"><h4>Une erreur est survenue lors de l\'ajout de l\'utilisateur.</h4></div>
					<div class="center" ><a class="waves-effect waves-light btn red darken-1" href="register.php">Retour à la page d\'inscription</a></div>');
			}
			else
			{
				header("Location : index.php");
			}
		}
		else
		{
			header("Location : index.php");
		}

		?>
	</div>
</div>
<?php include"footer.php" ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
