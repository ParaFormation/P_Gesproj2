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
                <a href="index.php" class="brand-logo center">P_GesProj2</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a href="formations.php">Formations</a></li>
                    <li><a href="trainers.php">Formateurs</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a class="modal-trigger waves-effect waves-light btn light-blue accent-3" href="#modal1">Connexion</a></li>
                    <li><a class="waves-effect waves-light btn grey accent-3" href="register.php">Inscription</a></li>

                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#">Formations</a></li>
                    <li><a href="#">Formateurs</a></li>
                    <li class="divider"></li>
                    <li><a class="modal-trigger waves-effect waves-light" href="#modal1">Connexion</a></li>
                    <li><a class="waves-effect waves-light" href="register.php">Inscription</a></li>
                </ul>
            </div>
        </nav>
    </div>