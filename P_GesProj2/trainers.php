<?php
/**
 * Created by PhpStorm.
 * User: bijelical
 * Date: 11.04.2016
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Formateurs - P_GesProj2</title>

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
        <h1>Formateurs</h1>
        <div class="row">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>Nero Petros</div>
                    <div class="collapsible-body">
                        <p>Informatique</p>
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