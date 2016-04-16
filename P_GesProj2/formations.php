<?php
session_start();
?>
<?php
/**
 * Created by PhpStorm.
 * User: taverneyax
 * Date: 21.03.2016
 * Time: 10:13
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Formations - P_GesProj2</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
<?php
include './navbar.php';

include './loginModal.php';
?>

<div class="container">
    <div class="section">
        <h1>Formations</h1>
        <div class="row">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">assessment</i>Informatique</div>
                    <div class="collapsible-body">
                        <p>
                            <br>Formateurs: Alen Bijelic
                            <br><a class="waves-effect waves-light btn blue right"><i class="material-icons right">note_add</i>S'inscrire</a>
                            <br>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">assessment</i>Bois</div>
                    <div class="collapsible-body">
                        <p>
                            <br>Formateurs: Alen Bijelic
                            <br><a class="waves-effect waves-light btn blue right"><i class="material-icons right">note_add</i>S'inscrire</a>
                            <br>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="./js/materialize.js"></script>
<script type="text/javascript" src="./js/init.js"></script>
</body>