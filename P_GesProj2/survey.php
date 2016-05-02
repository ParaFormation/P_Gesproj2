<?php
session_start();
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
</head>

<body>
<?php
include './navbar.php';
include './gesprojClass.php';
include './loginModal.php';

$gesprojClass = new gesprojClass();
$formations = $gesprojClass->getAllFormations();
$teachers = $gesprojClass->getAllTeachers();

?>

<div class="container">
    <div class="section">
        <h1>Enquête de satisfaction</h1></br></br>
			<form action="#">
				<h4 class="blue white-text center">Didactique</h4>
					<div class="row">
						<div class="col s12 m12">
							<h5>Les objectifs du cours étaient connus et ont étés atteints.</h5>
							<p>			  
							  <input name="group1" value="4" type="radio" id="option0" />
							  <label for="option0">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group1" value="3" type="radio" id="option1" />
							  <label for="option1">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group1" value="2" type="radio" id="option2" />
							  <label for="option2">Plutôt faux</label>
							</p>
							<p>
							  <input name="group1" value="1" type="radio" id="option3" />
							  <label for="option3">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group1" value="0" type="radio" id="option4" />
							  <label for="option4">Indécis</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m12">
							<h5>Le cours était bien structuré</h5>
							<p>			  
							  <input name="group2" value="4" type="radio" id="option5" />
							  <label for="option5">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group2" value="3" type="radio" id="option6" />
							  <label for="option6">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group2" value="2" type="radio" id="option7" />
							  <label for="option7">Plutôt faux</label>
							</p>
							<p>
							  <input name="group2" value="1" type="radio" id="option8" />
							  <label for="option8">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group2" value="0" type="radio" id="option9" />
							  <label for="option9">Indécis</label>
							</p>
						</div>
					</div>
			</form>			
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="./js/materialize.js"></script>
<script type="text/javascript" src="./js/init.js"></script>
</body>