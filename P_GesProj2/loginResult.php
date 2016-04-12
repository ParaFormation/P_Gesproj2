<?php
session_start();
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
        ?>
        <?php
        if($_GET['res'] == 0)
        {
            echo'<div class="card-panel white-text teal lighten-2"><h4>La connexion réussie</h4></div>';
            echo'<div class="center"><a class="waves-effect waves-light btn teal lighten-2" href="index.php">Retour à la page d\'accueil</a></div>';
        }
        else
        {
            echo'<div class="card-panel white-text red darken-1"><h4>Une erreur est survenue lors de la connexion</h4></div>';
            echo'<div class="center"><a class="waves-effect waves-light btn red darken-1" href="index.php">Retour à la page d\'accueil</a></div>';

        }
        ?>
        </div>
    </div>
    <br><br>

    <?php
    include 'footer.php';
    ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
