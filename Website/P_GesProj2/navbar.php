<?php
/**
 * User: bijelical
 * Date: 21.03.2016
 * Summary: Navbar of the site
 */
?>

<!-- Dropdown Structure -->
<ul id="dropdownFormations" class="dropdown-content">
    <li><a href="#">one</a></li>
    <li><a href="#">two</a></li>
    <li class="divider"></li>
    <li><a href="#">three</a></li>
</ul>
<ul id="dropdownFormators" class="dropdown-content">
    <li><a href="#">one</a></li>
    <li><a href="#">two</a></li>
    <li class="divider"></li>
    <li><a href="#">three</a></li>
</ul>
<!-- End Dropdown Structure -->
<!-- Navigation Structure -->
<nav class="blue">
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo center">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
            <li><a href="index.php">Accueil</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#" data-activates="dropdownFormations">Formations<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#" data-activates="dropdownFormators">Formateurs<i class="material-icons right">arrow_drop_down</i></a></li>
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
            <li><a class="waves-effect waves-light">Connexion</a></li>
            <li><a class="waves-effect waves-light" href="register.php">Inscription</a></li>
        </ul>
    </div>
</nav>