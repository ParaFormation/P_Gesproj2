<?php
/**
 * User: bijelical
 * Date: 21.03.2016
 * Summary:
 */

?>

<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <?php
        if (isset($_SESSION['user']))
        {
            echo '<h1 class="header center red-text">Déjà connecté</h1>';
        }
        else
        {
            echo('
                <h1>Connexion</h1>
                <h5>Vous n\'avez pas de compte ? Inscrivez-vous <a href="register.php">ici</a></h5>
                <div class="row">
                    <form class="col s12" action="checkLogin.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" name="username" type="text" class="validate" required>
                                <label for="username">Nom d\'utilisateur</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate" required>
                                <label for="password">Mot de passe</label>
                            </div>
                        </div>
                        <div >
                            <button name="submit_button" type="submit" class="modal-action waves-effect blue btn-flat white-text">Se connecter</button>
                            <a href="index.php" class="waves-effect waves-red  btn-flat">Annuler</a>
                        </div>
                    </form>
                </div>');
        }
        ?>

    </div>
</div>
<script type="text/javascript">
<?php if(isset($_GET['resON']) && $_GET['resON'] == "1" || $_GET['resON'] == "2") { ?> 
          $('#modal1').openModal();
<?php } ?>
</script>