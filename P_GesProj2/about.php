<?php
session_start();
?>
<?php
/**
 * User: bijelical
 * Date: 11.04.2016
 * Summary: 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>A propos - P_GesProj2</title>

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
    <div class="parallax"><img src="images/about.jpg" alt="Unsplashed background img 1"></div>
</div>
<div class="container">
    <div class="section">
        <?php
        include 'loginModal.php';
        ?>
        <div class="row">
            <div class="col s12 m6">
                <div class="flow-text">
                    Créé en 2016, ce projet doit aboutir sur un site Web permettant de gérer des listes de formations avec des formateurs et participants.
                    Le projet est réalisé par des apprentis informaticiens de l'ETML, actuellement en 2ème année.<br>
                    Pour tout renseignement, veuillez nous contacter via les liens e-mail ci-dessous.<br>
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
