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
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <?php
        include './navbar.php';
    ?>
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center blue-text">Accueil</h1>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="images/image.jpg" alt="Unsplashed background img 1"></div>
</div>
  <div class="container">
    <div class="section">
        <?php
        include 'login.php';
        ?>
            <div class="row center">
                <h5 class="header col s12 light">Bienvenue sur notre site de formation  !</h5>
                <h5 class="header col s12 light">Naviguer sur notre site grâce au onglets en haut à gauche, inscrivez-vous ou connectez-vous pour suivre une ou plusieurs formations.</h5>
            </div>
        <br><br>

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
