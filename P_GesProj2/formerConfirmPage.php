<?php
session_start();
//Redirect to index if user isn't logged
if(!isset($_SESSION['user']))
{
    header('location: ./index.php');
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: voisardth
 * Date: 21.03.2016
 * Time: 10:13
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Formations - P_GesProj2</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <?php include'./gesprojClass.php'; ?>
</head>

<?php
include './navbar.php';

include './loginModal.php';
?>

<div class="container">
    <div class="section">
        <h1>Confirmation des formateurs</h1>
        <div class="row">
            <ul class="collapsible" data-collapsible="accordion">
                <?php
                $gesprojClass = new gesprojClass();
                $FormersToConfirm = $gesprojClass->getFormerToConfirm();


                foreach($FormersToConfirm as $form)
                {
                    $li = '<li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>'  . $form['forFirstName']. " ". $form['forLastName'] . '</div>
                            <div class="collapsible-body">
                                <ul></br>
                                    <div class="margin-ul">
                                        <li><strong>Email : </strong>' .$form['forEmail']. '</li></br>
                                        <li><strong>Téléphone : </strong>' .$form['forPhone']. '</li></br>
                                        <li><strong>Qualifications : </strong>' .$form['forQualifications']. '</li></br>
                                        <li><a href="./post/postConfirmFormer.php?ID='.$form['fkUser'].'"  class="waves-effect waves-light btn  light-green" ><i class="material-icons right">done</i>Confirmer</a></li>
                                        <li><a href="./post/postDeleteFormer.php?ID='.$form['fkUser'].'" class="waves-effect waves-light btn red accent-4"><i class="material-icons right">delete</i>Supprimer</a></li><br>
                                    </div>
                                </ul>
                            </div>
                        </li>';

                    echo($li);;
                }

                ?>
            </ul>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="./js/materialize.js"></script>
<script type="text/javascript" src="./js/init.js"></script>
</html>