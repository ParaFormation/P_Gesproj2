<?php
/**
 * User: bijelical
 * Date: 21.03.2016
 * Summary: Navbar of the site
 */
?>
<!-- Navigation Structure -->

    <div class="navbar-fixed">
        <nav class="blue">
            <div class="nav-wrapper container">
                <a href="index.php" class="brand-logo center"><img src="images/logo.png" alt="Logo"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="index.php" class="hide-button">Accueil</a></li>
                    <li><a href="formations.php" class="hide-button">Formations</a></li>
                    <li><a href="trainers.php" class="hide-button">Formateurs</a></li>
                    <li><a href="about.php" class="hide-button">A propos</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <?php
                    if (isset($_SESSION['user']))
                    {
                        echo '<li><a class="btn grey lighten-1 hide-button">'.$_SESSION['user'].'</a></li>';
                        echo '<li><a href="logoutFunction.php" class="hide-button"><i class="material-icons">power_settings_new</i></a></li>';
                        echo '<li><a href="accountTypeSelection.php" class="hide-button"><i class="material-icons">settings</i></a></li>';
                    }
                    else
                    {
                        echo'<li><a class="btn grey lighten-1 hide-button" href="register.php">Inscription</a></li>';
                        echo'<li><a class="modal-trigger btn light-blue hide-button" href="#modal1">Connexion</a></li>';
                    }
                    ?>

                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="formations.php">Formations</a></li>
                    <li><a href="trainers.php">Formateurs</a></li>
                    <li><a href="about.php">A propos</a></li>
                    <li class="divider"></li>
                    <?php
                    if (isset($_SESSION['user']))
                    {
                        echo'<li><a href="logoutFunction.php">Déconnexion</a></li>';
                        echo'<li ><a class="waves-effect waves-light" href = "accountTypeSelection.php">Réglages</a ></li>';
                    }
                    else
                    {
                        echo'<li ><a class="waves-effect waves-light" href = "register.php" > Inscription</a ></li>';
                        echo'<li ><a class="modal-trigger waves-effect waves-light" href = "#modal1" > Connexion</a ></li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>