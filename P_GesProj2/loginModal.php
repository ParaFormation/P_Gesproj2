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
        <h5>Vous n'avez pas de compte? Inscrivez-vous <a href="register.php">ici</a></h5>
        <div class="row">
            <form class="col s12" action="checkLogin.php" method="post">
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
                    <button class="modal-action modal-close waves-effect waves-red  btn-flat ">Annuler</button>
                </div>
            </form>
        </div>
    </div>
</div>
