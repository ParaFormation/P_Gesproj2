<?php
session_start();
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
</head>
<body>
<main>
	<!-- Navbar -->
    <?php
    ob_start();
        include './gesprojClass.php';
        include './navbar.php';
    $newUser = new gesprojClass();
    if(isset($_SESSION['user']))
    {
	echo'
        <div class="container">
            <div class="section">
                <h3>Profil élève</h3></br></br>
                    <div class="row">
                        <form class="col s12 m12" method="POST">';
                                    if($newUser->checkAlreadyRegistered(1) == false)
                                    {
                                        echo'
                                        <div class="row">
                                            <div class="input-field col s6 m6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input name="firstname" id="firstname" type="text" class="validate" required>
                                                <label for="firstname">Prénom</label>
                                            </div>
                                            <div class="input-field col s6 m6">
                                                <input id="lastname" name="lastname" type="text" class="validate" required>
                                                <label for="lastname">Nom de famille</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m12">
                                                <i class="material-icons prefix">room</i>
                                                <input id="address" name="address" type="text" class="validate" required>
                                                <label for="address">Adresse + NPA</label>
                                            </div>
                                            </br></br></br>
                                        </div>';
                                    }
                            if($newUser->checkAlreadyRegistered(1) == true)
                            {
                                echo'
                                <h5> Changer le mot de passe </h5>
                                <div class="row" >
                                    <div class="input-field col s12 m6" >
                                        <i class="mdi-action-lock-outline prefix" ></i >
                                        <input id = "newPassword" name = "newPassword" type = "password" class="validate" >
                                        <label for="newPassword" > Nouveau mot de passe </label >
                                    </div >
                                </div >
                                <div class="row" >
                                    <div class="input-field col s12 m6" >
                                        <i class="mdi-action-lock-outline prefix" ></i >
                                        <input id = "confirmNewPassword" name = "confirmNewPassword" type = "password" class="validate" >
                                        <label for="confirmNewPassword" > Confirmation du nouveau mot de passe </label >
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
        echo 'Pas connecté !';
    }
    ?>

	<!-- Footer -->   
    <?php
        include 'footer.php';
        if(isset($_POST['lastname'],$_POST['firstname'],$_POST['address']))
        {
            $newUser->setAddress($_POST['address']);
            $newUser->setFirstname($_POST['lastname']);
            $newUser->setLastname($_POST['firstname']);
            $newUser->newStudForm(0);

            ob_end_flush();
        }
    ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    </main>
  </body>
</html>
