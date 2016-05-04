<?php
session_start();
ob_start();
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./js/jsGesProj.js"></script>
    <script src="./js/materialize.js"></script>
</head>

<body>
<?php
ob_start();

	include './navbar.php';
	include './gesprojClass.php';
	include './loginModal.php';

	$gesprojClass = new gesprojClass();
	$formations = $gesprojClass->getAllFormations();


	//format the sections in a combolist
	foreach($formations as $formation)
	{			
		//Store all the sections in a string with the html <option> tag
		$gesprojClass->formationList .= ('<option value="' . $formation["idTraining" ]. '">' . $formation["traName"] . ' </option>');
		
	}
ob_end_flush();
?>

<div class="container">
    <div class="section">
        <h1>Enquête de satisfaction</h1>
        <?php
        $class = new gesprojClass();

        $result = $class->checkAlreadyRegistered(1);

        if(isset($_SESSION['user']) && $result == true)
        {
            echo'

			<form action="./survey_post.php" method="POST">
				<div class="row">
					<div class="col s6 m6">
					<h5>Formation :</h5>
						<select name="formation" required>
						  <option value="" disabled selected >Choisissez la formation à évaluer.</option>
								'.$gesprojClass->formationList .'
						</select>
					</div>
				</div>
					</br></br><h4 class=" light blue-text">Didactique</h4>
					<li class="divider"></li></br></br>
					<div class="row">
						<div class="col s12 m12">
							<h5><b>1. </b>Les objectifs du cours étaient connus et ont étés atteints.</h5>
							<p>			  
							  <input  name="group1" value="4" type="radio" id="option0" />
							  <label  for="option0">Tout à fait vrai</label>
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
							<h5><b>2. </b>Le cours était bien structuré</h5>
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
					<div class="row">
						<div class="col s12 m12">
							<h5><b>3. </b>Le contenu (y compris les notions complexes) était compréhensible.</h5>
							<p>			  
							  <input name="group3" value="4" type="radio" id="option10" />
							  <label for="option10">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group3" value="3" type="radio" id="option11" />
							  <label for="option11">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group3" value="2" type="radio" id="option12" />
							  <label for="option12">Plutôt faux</label>
							</p>
							<p>
							  <input name="group3" value="1" type="radio" id="option13" />
							  <label for="option13">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group3" value="0" type="radio" id="option14" />
							  <label for="option14">Indécis</label>
							</p>
						</div>
					</div>
					</br></br><h4 class=" light blue-text">Andragogie</h4>
					<li class="divider"></li></br></br>
					<div class="row">
						<div class="col s12 m12">
							<h5><b>4. </b>La matière a été enseignée de manière intéressante.</h5>
							<p>			  
							  <input name="group4" value="4" type="radio" id="option15" />
							  <label for="option15">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group4" value="3" type="radio" id="option16" />
							  <label for="option16">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group4" value="2" type="radio" id="option17" />
							  <label for="option17">Plutôt faux</label>
							</p>
							<p>
							  <input name="group4" value="1" type="radio" id="option18" />
							  <label for="option18">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group4" value="0" type="radio" id="option19" />
							  <label for="option19">Indécis</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m12">
							<h5><b>5. </b>Le rythme était adapté au cours.</h5>
							<p>			  
							  <input name="group5" value="4" type="radio" id="option20" />
							  <label for="option20">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group5" value="3" type="radio" id="option21" />
							  <label for="option21">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group5" value="2" type="radio" id="option22" />
							  <label for="option22">Plutôt faux</label>
							</p>
							<p>
							  <input name="group5" value="1" type="radio" id="option23" />
							  <label for="option23">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group5" value="0" type="radio" id="option24" />
							  <label for="option24">Indécis</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m12">
							<h5><b>6. </b>Le temps disponible était adapté aux objectifs du cours et de la formation.</h5>
							<p>			  
							  <input name="group6" value="4" type="radio" id="option25" />
							  <label for="option25">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group6" value="3" type="radio" id="option26" />
							  <label for="option26">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group6" value="2" type="radio" id="option27" />
							  <label for="option27">Plutôt faux</label>
							</p>
							<p>
							  <input name="group6" value="1" type="radio" id="option28" />
							  <label for="option28">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group6" value="0" type="radio" id="option29" />
							  <label for="option29">Indécis</label>
							</p>
						</div>
					</div>
					</br></br><h4 class=" light blue-text">Animation</h4>
					<li class="divider"></li></br></br>
					<div class="row">
						<div class="col s12 m12">
							<h5><b>7. </b>L\'enseignant possèdait bien la matière enseignée.</h5>
							<p>			  
							  <input name="group7" value="4" type="radio" id="option30" />
							  <label for="option30">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group7" value="3" type="radio" id="option31" />
							  <label for="option31">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group7" value="2" type="radio" id="option32" />
							  <label for="option32">Plutôt faux</label>
							</p>
							<p>
							  <input name="group7" value="1" type="radio" id="option33" />
							  <label for="option33">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group7" value="0" type="radio" id="option34" />
							  <label for="option34">Indécis</label>
							</p>
						</div>
					</div>
					</br></br><h4 class=" light blue-text">Avis personnel</h4>
					<li class="divider"></li></br></br>
					<div class="row">
						<div class="col s12 m12">
							<h5><b>8. </b>J\'ai pu enrichir mes connaissances et ma réflexion.</h5>
							<p>			  
							  <input name="group8" value="4" type="radio" id="option35" />
							  <label for="option35">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group8" value="3" type="radio" id="option36" />
							  <label for="option36">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group8" value="2" type="radio" id="option37" />
							  <label for="option37">Plutôt faux</label>
							</p>
							<p>
							  <input name="group8" value="1" type="radio" id="option38" />
							  <label for="option38">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group8" value="0" type="radio" id="option39" />
							  <label for="option39">Indécis</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m12">
							<h5><b>9. </b>J\'ai acquis des outils supplémentaires pour ma pratique quotidienne.</h5>
							<p>			  
							  <input name="group9" value="4" type="radio" id="option40" />
							  <label for="option40">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group9" value="3" type="radio" id="option41" />
							  <label for="option41">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group9" value="2" type="radio" id="option42" />
							  <label for="option42">Plutôt faux</label>
							</p>
							<p>
							  <input name="group9" value="1" type="radio" id="option43" />
							  <label for="option43">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group9" value="0" type="radio" id="option44" />
							  <label for="option44">Indécis</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m12">
							<h5><b>10. </b>J\'ai pu prendre une part active au cours.</h5>
							<p>			  
							  <input name="group10" value="4" type="radio" id="option45" />
							  <label for="option45">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group10" value="3" type="radio" id="option46" />
							  <label for="option46">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group10" value="2" type="radio" id="option47" />
							  <label for="option47">Plutôt faux</label>
							</p>
							<p>
							  <input name="group10" value="1" type="radio" id="option48" />
							  <label for="option48">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group10" value="0" type="radio" id="option49" />
							  <label for="option49">Indécis</label>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m12">
						<h5><b>11. </b>Avis personnel</h5>
							<p>			  
							  <input name="group11" value="4" type="radio" id="option50" />
							  <label for="option50">Tout à fait vrai</label>
							</p>
							<p>
							  <input name="group11" value="3" type="radio" id="option51" />
							  <label for="option51">Plutôt vrai</label>
							</p>
							<p>
							  <input name="group11" value="2" type="radio" id="option52" />
							  <label for="option52">Plutôt faux</label>
							</p>
							<p>
							  <input name="group11" value="1" type="radio" id="option53" />
							  <label for="option53">Tout à fait faux</label>
							</p>
							<p>
							  <input name="group11" value="0" type="radio" id="option54" />
							  <label for="option54">Indécis</label>
							</p>
						</div>
					</div>
					</br><h5><b>12. </b>Remarque (facultatif).</h5>
					  <div class="row">
							<div class="input-field col s12">
							  <i class="material-icons prefix">mode_edit</i>
							  <textarea name="comment" id="icon_prefix2" class="materialize-textarea"></textarea>
							  <label for="icon_prefix2">Écrivez votre commentaire</label>
						    </div>
					  </div>
					<div class="row">
						<button type="submit" id="submit" class="waves-effect waves-light btn"><i class="material-icons right">label outline</i>Soumettre cette évaluation</button>
					</div>
			</form>
			';
            }
            else
            {
                echo '
                          <div class="row center">
                            <div class="col s12 m12">
                              <div class="card red">
                                <div class="card-content white-text">
                                  <span class="card-title">Page réservée aux élève</span>
                                  <p>Pour accéder à cette page, vous devez vous connectez en tant que élève.</p>
                                </div>
                                <div class="card-action">
                                  <a href="index.php" class="white-text waves-effect waves-light grey btn">Retour à l\'accueil</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        ';
            }
            ?>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

<script> $(document).ready(function() {$('select').material_select();})</script>
<script type="text/javascript" src="./js/init.js"></script>
</body>