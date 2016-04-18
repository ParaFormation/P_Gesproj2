<?php
session_start();
?>
<?php
/**
 * User: bijelical
 * Date: 21.03.2016
 * Summary: 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Infos formateur - P_GesProj2</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<!-- Navbar -->
    <?php include './navbar.php'; ?>
	
	<!-- Form section -->
	<div class="container">
		<div class="section">
			<h3>Profil formateur</h3></br></br>
				<div class="row">
					<form class="col s12 m12" method="POST" action="checkRegister.php">
						<div class="row">
							<div class="input-field col s6 m6">
								<i class="material-icons prefix">account_circle</i>
								<input name="firstname" id="firstname" type="text" class="validate" required>
								<label for="firstname">Prénom</label>
							</div>
							<div class="input-field col s6 m6">
								<input id="lastname" name="lastname" type="text" class="validate" required>
								<label for="lastname">Nom de famille</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12">
								<i class="material-icons prefix">room</i>
								<input id="address" name="address" type="text" class="validate" required>
								<label for="address">Adresse + NPA</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12">
								<i class="material-icons prefix">email</i>
								<input id="email" name="email" type="text" class="validate" required>
								<label for="email">Adresse email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12">
								<i class="material-icons prefix">phone</i>
								<input id="phone" name="phone" type="text" class="validate" required>
								<label for="phone">N° de téléphone</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12">
							  <i class="material-icons prefix">mode_edit</i>
							  <textarea name="qualifications"id="qualifications" class="materialize-textarea"></textarea>
							  <label for="qualifications">Qualifications</label>
                            </div>
							  </br></br></br>
					   </div>
					   <h5>Changer le mot de passe</h5>
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="mdi-action-lock-outline prefix"></i>
									<input id="newPassword" name="newPassword" type="password" class="validate" required>
									<label for="newPassword">Nouveau mot de passe</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<i class="mdi-action-lock-outline prefix"></i>
									<input id="confirmNewPassword" name="confirmNewPassword" type="password" class="validate" required>
									<label for="confirmNewPassword">Confirmation du nouveau mot de passe</label>
								</div>
						    </div>
					<button class="btn waves-effect waves-light blue" type="submit" name="action">Enregistrer les informations
						<i class="material-icons right">done</i>
					</button>
				</form>
			</div>
		</div>
	</div>
 

	<!-- Footer -->   
    <?php include 'footer.php';?>
    


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
