<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Déconnexion - P_Gesproj</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<?php
include './navbar.php';
?>


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <?php
            if($_GET['res'] == 0)
            {
                echo'<h1 class="header center green-text">Déconnexion réussie</h1>';
            }
            else
            {
                echo'<h1 class="header center red-text">Vous n\'êtes pas connecté !</h1>';
            }
        ?>

    </div>
</div>

<?php
include 'footer.php';
?>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>