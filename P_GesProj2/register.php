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
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Inscription - P_GesProj2</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./js/jsGesProj.js"></script>
    <script src="./js/materialize.js"></script>
</head>


<?php
if(isset($_GET['resINS']) && ($_GET['resINS']) == 1)
{
    echo '<script type="text/javascript">'
    , 'successMessage("Cet utilisateur existe déjà !");'
    , '</script>'
    ;
}
?>
<?php
include './gesprojClass.php';
include './navbar.php';
include './loginModal.php';
?>
<div class="container">
    <div class="section">
        <?php
        if (isset($_SESSION['user']))
        {
            echo '<h1 class="header center red-text">Déjà connecté</h1>';
        }
        else
        {
            echo('
                    <h1>Inscription</h1>
                    <div class="row">
                        <form class="col s12" onsubmit="return checkPasswords()" method="POST" action="checkRegister.php">
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input name="username" id="username" type="text" class="validate" required>
                                    <label for="username">Nom d\'utilisateur</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="mdi-action-lock-outline prefix"></i>
                                    <input id="password1" name="password1" type="password" class="validate" required>
                                    <label for="password1">Mot de passe</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="mdi-action-lock-outline prefix"></i>
                                    <input id="passwordConfirm" name="passwordConfirm" type="password" class="validate" required>
                                    <label for="passwordConfirm">Confirmation mot de passe</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light blue" type="submit" name="action">S\'inscrire
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                ');
        }
        ?>
     </div>
</div>

<?php
	include 'footer.php';
?>

<script type="text/javascript" src="./js/init.js"></script>
</html>
