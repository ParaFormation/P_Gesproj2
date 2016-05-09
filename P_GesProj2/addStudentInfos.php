<?php
session_start();
ob_start();
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
    <title>Infos élèves - P_GesProj2</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./js/jsGesProj.js"></script>
    <script src="./js/materialize.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php
    ob_start();
    include './gesprojClass.php';
    include './navbar.php';
    $newUser = new gesprojClass();
    if(isset($_SESSION['user']) && ($newUser->checkAlreadyRegistered(2) == false))
    {
        echo '
        <div class="container">
            <div class="section">
                <h3>Profil élève</h3></br></br>
                    <div class="row">
                        <form class="col s12 m12" method="POST" onsubmit="return checkPasswords()" action="post/postStudConfig.php">';
        ob_end_flush();
        if($newUser->checkAlreadyRegistered(1) == false)
        {
            echo'
                <div class="row">
                    <div class="input-field col s6 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="firstname" id="firstname" type="text" class="validate"  pattern="^[a-zA-Z-]*" required>
                        <label for="firstname">Prénom</label>
                    </div>
                    <div class="input-field col s6 m6">
                        <input id="lastname" name="lastname" type="text" class="validate" pattern="^[a-zA-Z-]*" required>
                        <label for="lastname">Nom de famille</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12">
                        <i class="material-icons prefix">room</i>
                        <input id="address" name="address" type="text" pattern="^([a-zA-Z].*)\d" class="validate" required>
                        <label for="address">Adresse + NPA</label>
                    </div>
                    </br></br></br>
                </div>';
        }

        if($newUser->checkAlreadyRegistered(1) == true)
        {
            $displayRegisteredTraining = new gesprojClass();

            $getUserID = $displayRegisteredTraining->getSessionID();

            $result = $displayRegisteredTraining->getRegisteredFormations($getUserID);

            if(!empty($result))
            {
                echo'
                <div class="row">
                    <h5>Mes inscriptions</h5>
                    <br />
                    <ul class="collapsible" data-collapsible="accordion">
                ';

                foreach($result as $form)
                {
                    $li = '<li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>' . $form['traName'] . '</div>
                            <div class="collapsible-body">
                                <ul></br>
                                    <div class="margin-ul">
                                        <li><strong>Description : </strong>' .$form['traDescription']. '</li></br>
                                        <li><strong>Date de début : </strong>' .$form['traStartDate']. '</li></br>
                                        <li><strong>Date de fin : </strong>' .$form['traEndDate']. '</li></br>
                                        <li><strong>Nombre des périodes : </strong>' .$form['traPeriodicity']. '</li></br>
                                        <li><strong>Prix : </strong>' .$form['traPrice']. '.-</li></br>
                                        <li><strong>Lieu : </strong>' .$form['traLocality']. '</li></br>
                                        <li><strong>Nombre de participant min. : </strong>' .$form['traMinParticipants']. '</li></br>
                                        <li><strong>Nombre de participant max. : </strong>' .$form['traMaxParticipants']. '</li></br>
                                        <li><strong>Formateur : </strong><a href="./trainers.php">' .$form['forFirstname']. ' ' . $form['forLastname'] . '</a></li></br>
                                        </br>
                                    </div>
                                </ul>

                            </div>

                        </li>';

                    echo($li);
                }

                echo'
                </ul>
                ';
            }
            else
            {
                echo'Nous ne pouvons pas afficher vos formations car vous n\'êtes inscrit à aucune de nos formations.';
            }

            echo'
                <h5> Changer le mot de passe </h5>
                <div class="row" >
                    <div class="input-field col s12 m6" >
                        <i class="mdi-action-lock-outline prefix" ></i >
                        <input id = "password1" name = "password1" type = "password" class="validate" >
                        <label for="password1" > Nouveau mot de passe </label >
                    </div >
                </div >
                <div class="row" >
                    <div class="input-field col s12 m6" >
                        <i class="mdi-action-lock-outline prefix" ></i >
                        <input id = "passwordConfirm" name = "passwordConfirm" type = "password" class="validate" >
                        <label for="passwordConfirm" > Confirmation du nouveau mot de passe </label >
                    </div >
                </div >';
        }
        echo'
                        <button class="btn waves-effect waves-light blue" type="submit" name="action">Enregistrer les informations
                            <i class="material-icons right">done</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>';

    }
    else
    {
        ob_end_flush();
        header('location: ./index.php');
    }
    ?>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

    <!--  Scripts-->
    <script src="js/init.js"></script>
</body>
</html>
