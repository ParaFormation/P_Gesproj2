<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Formateurs - P_GesProj2</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <?php include'./gesprojClass.php'; ?>
</head>

<?php
include './navbar.php';

include './loginModal.php';

$trainer = new gesprojClass();
$trainerList = $trainer->getAllTrainers();
$HTML_List = "";

foreach($trainerList as $trainer)
{
    $formation = $trainer['traName'];

    if($formation == "")
    {
        $formation = "Pas de formation";
    }

    $HTML_List = $HTML_List .  '<li>
                                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>' . $trainer['forFirstname']. ' ' . $trainer['forLastname'] . '</div>
                                    <div class="collapsible-body">
                                        <ul></br>
                                            <div class="margin-ul">
                                                <li><strong>Addresse : </strong>' .$trainer['forAddress']. '</li></br>
                                                <li><strong>Email : </strong>' .$trainer['forEmail']. '</li></br>
                                                <li><strong>Téléphone : </strong>' .$trainer['forPhone']. '</li></br>
                                                <li><strong>Formation : </strong>' .$formation. '</li></br>
                                                <li><strong>Qualifications : </strong>' .$trainer['forQualifications']. '</li></br>
                                                </br>
                                            </div>
                                        </ul>
                                    </div>
                                </li>';
}
ob_end_flush();
?>

<div class="container">
    <div class="section">
        <h1>Formateurs</h1>
        <div class="row">
            <ul class="collapsible" data-collapsible="accordion">
                <?=$HTML_List?>
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