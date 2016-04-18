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
<main>
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
        <div class="row center">
            <div class="col s12 m12">
                <p class="flow-text ">
                    Créé en 2016, ce projet doit aboutir sur un site Web permettant de gérer des listes de formations avec des formateurs et participants.
                    Le projet est réalisé par des apprentis informaticiens de l'ETML, actuellement en 2ème année.<br>
                    Pour tout renseignement, veuillez nous contacter via les liens e-mail ci-dessous.<br>
                </p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2473.423747275303!2d6.614519116280114!3d46.52390249840872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c31d68ec34665%3A0x1247716e1a4ec528!2sETML!5e1!3m2!1sfr!2sch!4v1455288539642" class="col s12 m12" height="450"  frameborder="0" style="border:0" allowfullscreen></iframe>
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
</main>
</body>
</html>
