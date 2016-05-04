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
  <title>Accueil - P_GesProj2</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./js/jsGesProj.js"></script>
    <script src="./js/materialize.js"></script>
</head>
<body>
    <?php
        if(isset($_GET['resINS']) && ($_GET['resINS'] == 0))
        {
            echo '<script type="text/javascript">'
            , 'connexionOK("Inscription réussie !");'
            , '</script>'
            ;
        }
        else {
            if (isset($_GET['resOFF']) && ($_GET['resOFF']) == 0)
            {
                echo '<script type="text/javascript">'
                , 'connexionOK("Déconnexion réussie !");'
                , '</script>';
            }
            else
            {
                if (isset($_GET['resOFF']) && ($_GET['resOFF']) == 1) {
                    echo '<script type="text/javascript">'
                    , 'connexionKO("Déconnexion non réussie !");'
                    , '</script>';
                }
                else
                {
                    if(isset($_GET['resON']) && ($_GET['resON']) == 0)
                    {
                        echo '<script type="text/javascript">'
                        , 'connexionOK("Connexion réussie !");'
                        , '</script>'
                        ;
                    }
                    else
                    {
                        if(isset($_GET['resON']) && ($_GET['resON']) == 1)
                        {
                            echo '<script type="text/javascript">'
                            , 'connexionKO("Mot de passe erroné !");'
                            , '</script>'
                            ;
                        }
                        else
                        {
                            if(isset($_GET['resON']) && ($_GET['resON']) == 2)
                            {
                                echo '<script type="text/javascript">'
                                , 'connexionKO("Utilisateur inexistant !");'
                                , '</script>'
                                ;
                            }
                        }
                    }
                }
            }
        }

    ?>

    <?php
        include './navbar.php';

        if(isset($_GET['need_confirmation']))
        {
            echo('<div class="card-panel white-text cyan darken-4 center">
                         <i class="medium material-icons">info_outline</i></br>
                         <h4>Votre compte sera bientôt validé, patience !</h4></br>
                            Vos informations ont bien été enregistrées, mais ce compte formateur
                            n\'a pas encore été validé par un administrateur.</br></br>
                        <a href="./index.php" class="waves-effect waves-light btn cyan darken-4"><i class="material-icons right">done</i>J\'ai compris !</a>
                    </div>
                </br></br>');
        }
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
                <h5 class="header col s12 light">Bienvenue sur notre site de formation !</h5>
                <h5 class="header col s12 light">Naviguez sur notre site grâce au onglets en haut à gauche, inscrivez-vous ou connectez-vous pour suivre une ou plusieurs formations. Visionnez également les formateurs disponibles.</h5>
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

                    <p class="light">Notre site utilise le Framework Materialize, ce qui vous permet une naviguation fluide et agréable. Disponible également où que vous soyez : sur votre ordinateur, votre tablette et même votre smartphone!</p>
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
  <script src="js/init.js"></script>

  </body>
</html>
