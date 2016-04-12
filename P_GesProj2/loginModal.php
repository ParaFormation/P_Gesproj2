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
        <h1>Connection</h1>
        <h5>Vous n'avez pas de compte ? Inscrivez-vous <a href="register.php">ici.</a></h5>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="login" type="text" class="validate">
                        <label for="login">Login</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Mot de passe</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect blue btn-flat white-text">Se connecter</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-red  btn-flat ">Annuler</a>
    </div>
</div>