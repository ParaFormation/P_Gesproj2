<?php
/**
 * User: bijelical
 * Date: 02.05.2016
 * Summary: 
 */

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
    <title>Mes formations - P_GesProj2</title>

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

    <div class="container">
        <div class="section">
            <?php
            include 'loginModal.php';
            ?>

            <h1>Formations</h1>
            <div class="row">
                <ul class="collapsible" data-collapsible="accordion">
                    <?php
                    include 'gesprojClass.php';

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
                                        <li><a href="inscription.php?id='. $form['idTraining'] .'&a=login" class="btn tooltipped waves-effect waves-light btn light-blue accent-3" data-position="right" data-delay="50" data-tooltip="En cours de développement"><i class="material-icons right">note_add</i>S\'inscrire</a>
                                        </br>
                                    </div>
                                </ul>

                            </div>

                        </li>';

                        echo($li);;

                    }

                    ?>

                </ul>
                <a href="addFormationInfos.php" class="btn tooltipped waves-effect waves-teal btn green accent-3" data-position="right" data-delay="50" data-tooltip="En cours de développement"><i class="material-icons right">add</i>Ajouter</a>
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
