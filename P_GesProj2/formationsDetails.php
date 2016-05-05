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
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./js/jsGesProj.js"></script>
    <script src="./js/materialize.js"></script>
</head>

    <?php
    include './navbar.php';
    include 'loginModal.php';
    ?>

    <div class="container">
        <div class="section">
            <h1>Mes formations</h1>
            <div class="row">

                <?php
                include './gesprojClass.php';

                $class = new gesprojClass();

                $result = $class->checkAlreadyRegistered(1);

                if(isset($_SESSION['user']) || $result == true) {
                    echo    '<ul class="collapsible" data-collapsible="expandable">';
                    $formations = $class->getTrainerFormations($_SESSION['user']);

                    foreach ($formations as $form) {
                        $nbParticipants = $class->registeredParticipants($form['idTraining']);

                        $li = '<li>
                                <div class="collapsible-header active"><i class="material-icons">filter_drama</i>' . $form['traName'] . '</div>
                                <div class="collapsible-body">
                                    <ul></br>
                                        <div class="margin-ul">
                                            <li><strong>Description : </strong>' . $form['traDescription'] . '</li></br>
                                            <li><strong>Date de début : </strong>' . $form['traStartDate'] . '</li></br>
                                            <li><strong>Date de fin : </strong>' . $form['traEndDate'] . '</li></br>
                                            <li><strong>Périodicité : </strong>' . $form['traPeriodicity'] . '</li></br>
                                            <li><strong>Prix : </strong>' . $form['traPrice'] . '.-</li></br>
                                            <li><strong>Lieu : </strong>' . $form['traLocality'] . '</li></br>
                                            <li><strong>Nombre de participant min. : </strong>' . $form['traMinParticipants'] . '</li></br>
                                            <li><strong>Nombre de participant max. : </strong>' . $form['traMaxParticipants'] . '</li></br>
                                            <li><strong>Nombre de participant : </strong>' . $nbParticipants['Students'] . '</li></br>
                                            <li><strong>Formateur : </strong><a href="./trainers.php">' . $form['former1'] . '</a></li></br>
                                            </br>
                                        </div>
                                    </ul>

                                </div>

                            </li>';

                        echo($li);;

                    }
                    echo '</ul>';
                }
                else{
                    echo '
                          <div class="row center">
                            <div class="col s12 m12">
                              <div class="card red">
                                <div class="card-content white-text">
                                  <span class="card-title">Page réservée aux formateurs</span>
                                  <p>Pour accéder à cette page, vous devez vous connectez en tant que formateur.</p>
                                </div>
                                <div class="card-action">
                                  <a href="index.php" class="white-text waves-effect waves-light grey btn">Retour à l\'accueil</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
    <br><br>

    <?php
    include 'footer.php';
    ?>
    <!--  Scripts-->
    <script src="js/init.js"></script>
</html>
