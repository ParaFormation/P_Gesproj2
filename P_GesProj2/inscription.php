<?php
/**
 * User: bijelical
 * Date: 25.04.2016
 * Summary: 
 */

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Inscription - P_GesProj2</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <?php include './gesprojClass.php'; ?>
</head>

<body>
<?php
include './navbar.php';

include './loginModal.php';
?>

<div class="container">
    <div class="section">
        <h1>Inscription à la formation</h1>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue">
                    <div class="col s12">
                        <a class="breadcrumb white-text">Connexion</a>
                        <a class="breadcrumb white-text">Payement</a>
                        <a class="breadcrumb white-text">Aperçu</a>
                    </div>
                </div>
            </nav>
            <?php
            if(isset($_GET['a']))
            {
                if($_GET['a'] == 'login')
                {
                    if(isset($_SESSION['user']))
                    {
                        echo 'Alen Bijelic<br /> Avenue des Monts 43 <br />Lausanne <br /> <br /> <a href="inscription.php?id=' . $_GET['id'] . '&a=payment" class="waves-effect waves-light blue btn right"><i class="material-icons right">label_outline</i>Suivant</a>';
                    }
                    else
                    {
                        echo '
                    <form class="col s12 m6" action="checkLogin.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" name="username" type="text" class="validate" required>
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div >
                            <button type="submit" class="modal-action waves-effect blue btn-flat white-text">Se connecter</button>
                        </div>
                    </form>';
                    }
                }
                if($_GET['a'] == 'payment')
                {
                    echo'Payement au début de la formation. <br /><a href="inscription.php?id=' . $_GET['id'] . '&a=preview" class="waves-effect waves-light blue btn right"><i class="material-icons right">label_outline</i>Suivant</a>';
                }
                if($_GET['a'] == 'preview')
                {
                    echo '<div class="s12 m6">Alen Bijelic<br /> Avenue des Monts 43 <br />Lausanne <br /> <br /></div><div class="s12 s6">Description : L’informaticien-ne est la ou le spécialiste des systèmes informatiques, des problèmes de programmation demandant des connaissances globales des processus ainsi que de la formation et du support apportés aux utilisateurs.<br />
                            Date de début : 2021-03-20<br />
                            Date de fin : 2021-03-20<br />
                            Périodicité : 25<br />
                            Prix : 400.- <br />
                            Lieu : Lausanne <br />
                            Nombre de participant min. : 8<br/>
                            Nombre de participant max. : 15<br/>
                            Formateur : Fisher <br/>
                            <a href="inscription.php?id=' . $_GET['id'] . '&a=done" class="waves-effect waves-light blue btn right"><i class="material-icons right">label_outline</i>Terminer</a>
                            </div>';

                            $inscription = new gesprojClass();

                            $result = $inscription->getStudent($_SESSION['user']);

                            foreach($result as $row){
                                $inscription->registerStudentToTraining($_GET['id'], $row['idStudent']);
                            }

                }
                if($_GET['a'] == 'done')
                {
                    echo '
                          <div class="row center">
                            <div class="col s12 m12">
                              <div class="card grey lighten-3">
                                <div class="card-content black-text">
                                  <span class="card-title">Inscription réussi</span>
                                  <p>Vous avez été inscrit à notre formation. Nous vous en remercions.</p>
                                </div>
                                <div class="card-action">
                                  <a href="index.php" class="black-text waves-effect waves-light blue btn">Ok</a>
                                </div>
                              </div>
                            </div>
                          </div>
            ';
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
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/init.js"></script>
</body>