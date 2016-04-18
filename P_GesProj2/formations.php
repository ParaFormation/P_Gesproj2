<?php
session_start();
?>
<?php
/**
 * Created by PhpStorm.
 * User: voisardth
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
    <?php include'./gesprojClass.php'; ?>
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
                    <?php
                    $gesprojClass = new gesprojClass();
                    $formations = $gesprojClass->getAllFormations();


                    foreach($formations as $form)
                    {
                        $li = '<li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>' . $form['traName'] . '</div>
                            <div class="collapsible-body">
                                <ul></br>
                                    <div class="margin-ul">
                                        <li><strong>Description : </strong>' .$form['traDescription']. '</li></br>
                                        <li><strong>Date de début : </strong>' .$form['traStartDate']. '</li></br>
                                        <li><strong>Date de fin : </strong>' .$form['traEndDate']. '</li></br>
                                        <li><strong>Périodicité : </strong>' .$form['traPeriodicity']. '</li></br>
                                        <li><strong>Prix : </strong>' .$form['traPrice']. '.-</li></br>
                                        <li><strong>Lieu : </strong>' .$form['traLocality']. '</li></br>
                                        <li><strong>Nombre de participant min. : </strong>' .$form['traMinParticipants']. '</li></br>
                                        <li><strong>Nombre de participant max. : </strong>' .$form['traMaxParticipants']. '</li></br>
                                        <li><strong>Formateur : </strong><a href="./trainers.php">' .$form['former1']. '</a></li></br>
                                        <li><a class="waves-effect waves-light btn blue center"><i class="material-icons right">note_add</i>S\'inscrire</a></li><br>

                                    </div>
                                </ul>
                            </div>
                        </li>';

                        echo($li);;
                    }

                    ?>
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