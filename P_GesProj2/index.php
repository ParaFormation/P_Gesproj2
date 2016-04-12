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
        include 'loginModal.php';
        ?>
            <div class="row center">
                <h5 class="header col s12 light">Bienvenue sur notre site de formation  !</h5>
                <h5 class="header col s12 light">Naviguer sur notre site grâce au onglets en haut à gauche, inscrivez-vous ou connectez-vous pour suivre une ou plusieurs formations.</h5>
            </div>
        <br><br>
        <div class="row center">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">work</i></h2>
                    <h5 class="center">Formation de Qualité</h5>

                    <p class="light">Nos formations proposées sont encadrées par les meilleurs professeurs du pays. Apprenez avec nos formateurs venus des 4 coins de la Terre !</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">dashboard</i></h2>
                    <h5 class="center">Une interface épurée</h5>

                    <p class="light">Notre site utilise le Material Design de Google, ce qui vous permet une naviguation fluide et agréable. Disponible également où que vous soyez : sur votre ordinateur, votre tablette et même votre smartphone!</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">thumb_up</i></h2>
                    <h5 class="center">Gérer vos formations</h5>

                    <p class="light"> Grâce à notre système de connexion, vous pouvez gérer vos inscriptions aux formations et/ou en créer de nouvelle ! Si vous êtes un étudiant, connectez-vous et inscrivez-vous à votre formation. </p>
                </div>
            </div>
        </div>
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
