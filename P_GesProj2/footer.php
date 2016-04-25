<?php
/**
 * User: bijelical
 * Date: 21.03.2016
 * Summary:
 */

?>

<footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">P_GesProj2</h5>
                <p class="grey-text text-lighten-4">Ce site a été créé dans le cadre du projet P_GesProj2 à l'ETML. Ce site utilise le Framework Materialize. </p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Liens</h5>
                <ul>
                    <li><a class="white-text" href="index.php">Accueil</a></li>
                    <li><a class="white-text" href="formations.php">Formations</a></li>
                    <li><a class="white-text" href="trainers.php">Formateurs</a></li>
                    <?php
                    if (isset($_SESSION['user']))
                    {
                        echo '<li><a class="white-text" href="logoutFunction.php">Déconnexion</a></li>';
                    }
                    else
                    {
                        echo'<li><a class="white-text modal-trigger" href="#modal1">Connexion</a></li>';
                        echo'<li><a class="white-text" href="register.php">Inscription</a></li>';
                    }
                    ?>


                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                    <li><a class="white-text" href="mailto:bijelical@etml.educanet2.ch">Alen Bijelic</a></li>
                    <li><a class="white-text" href="mailto:carvalhoda@etml.educanet2.ch">David Carvalho</a></li>
                    <li><a class="white-text" href="mailto:fernandemi@etml.educanet2.ch">Miguel Fernandes</a></li>
                    <li><a class="white-text" href="mailto:gillieroro@etml.educanet2.ch">Romain Gilliéron</a></li>
                    <li><a class="white-text" href="mailto:taverneyax@etml.educanet2.ch">Axel Taverney</a></li>
                    <li><a class="white-text" href="mailto:voisardth@etml.educanet2.ch">Théodore Voisard</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright © 2016 CIN2A
        </div>
    </div>
</footer>