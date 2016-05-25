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
</head>

<?php
include './navbar.php';
include './gesprojClass.php';
include './loginModal.php';

$gesprojClass = new gesprojClass();
$formations = $gesprojClass->getAllFormations();

?>

<div class="container">
    <div class="section">
        <h1>Formations</h1>
        <div class="row">
            <ul class="collapsible" data-collapsible="accordion">
                    <?php
					

					
                    foreach($formations as $form)
                    {
						$regButton = "";
					
						if(isset($_SESSION['user']))
						{
							$regButton = '<a href="inscription.php?id='. $form['idTraining'] .'&a=login" class="btn waves-effect waves-light btn light-blue accent-3"><i class="material-icons right">note_add</i>S\'inscrire</a>';
						}

                        $li = '<li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>' . $form['traName'] . '</div>
                            <div class="collapsible-body">
                                <ul></br>
                                    <div class="margin-ul">
                                        <li><b>Description : </b>' .$form['traDescription']. '</li></br>
                                        <li><b>Date de début : </b>' .$form['traStartDate']. '</li></br>
                                        <li><b>Date de fin : </b>' .$form['traEndDate']. '</li></br>
                                        <li><b>Nombre des périodes : </b>' .$form['traPeriodicity']. '</li></br>
                                        <li><b>Prix : </b>' .$form['traPrice']. '.-</li></br>
                                        <li><b>Lieu : </b>' .$form['traLocality']. '</li></br>
                                        <li><b>Nombre de participant min. : </b>' .$form['traMinParticipants']. '</li></br>
                                        <li><b>Nombre de participant max. : </b>' .$form['traMaxParticipants']. '</li></br>
                                        <li><b>Formateurs : </b><a href="./trainers.php">' .$form['former1']. '</a> et <a href="./trainers.php">'.$form['former2'].'</a></li></br>
                                        <li>'.$regButton.'</li>
                                        </br>
                                    </div>
                                </ul>

                            </div>

                        </li>';

                        echo($li);;

                    }
				?>
            </ul>
			<?php
				if(isset($_SESSION['user']))
				{
					echo('
							<a href="./survey.php" class="waves-effect blue white-text waves-light btn"><i class="material-icons left">assignment</i>Évaluer une formation</a>
						');
						
						if(isset($_SESSION['admin']))
						{
							echo('
									<a href="#" class="btn tooltipped waves-effect waves-teal btn teal lighten-2" data-position="left" data-delay="50" data-tooltip="En cours de développement"><i class="material-icons right">add</i>Ajouter</a>
							    ');
						}
				}
			?>
		</div>
    </div>
</div>

<?php
include 'footer.php';
?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="./js/materialize.js"></script>
<script type="text/javascript" src="./js/init.js"></script>
</html>