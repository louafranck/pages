<h1>S'inscrire</h1>
<hr/>

<?php 

	if (isset($_POST['submit'])) {
			
			$pseudo = htmlspecialchars(trim($_POST['pseudo']));
			$email = htmlspecialchars(trim($_POST['email']));
			$telephone = htmlspecialchars(trim($_POST['telephone']));
			$password = htmlspecialchars(trim($_POST['password'])); 
			$password_confirm = htmlspecialchars(trim($_POST['password_confirm']));
			$genre = htmlspecialchars($_POST['genre']);

				$errors = [] ;
			if (empty($pseudo) || empty($email) || empty($telephone) || empty($password)) {
				
				$errors['empty'] = "Tous les champs sont obligatoires";
			}

		
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
					
					$errors['emailv'] = "L'email n'est pas valide";	
			} 

			 if (isEmail($email)) {
					
					$errors['isemail'] = "L'email est déjà utiliser pour un autre compte";
				} 

				if (!is_numeric($telephone)) {
					
					$errors['telephonev'] = "Le numéro doit être au format numérique";
				} 

				if ($password != $password_confirm) {
					
					$errors['passwordi'] = "Les deux mot de passes ne correspondent pas";
				}



				if (!empty($errors)) {
					?>
				<div class="card red">
					<div class="card-content white-text">
						<?php 
								foreach ($errors as $error) {
									echo $error ."<br/>";
								}

						 ?>
					</div>
				</div>
					<?php 
				} else {

						ajoututilisateur($pseudo,$email,$password,$telephone,$genre);
					?>


						<div class="card green">
	                            <div class="card-content white-text">
	                                <?php
	                                echo "Compte créer avec succès";

	                                header("refresh:4;index.php?page=compteuser");
	                                ?>
	                            </div>
	                        </div>

					<?php 

				}

			} 

?>


					<form method="post">
						<div class="row"> 
							<div class="input-field col s12 m6">
								<input type="text" name="pseudo" id="pseudo" autocomplete="off" > 
								<label for="pseudo">Pseudo</label>
							</div>
							<div class="input-field col s12 m6">
								<input type="email" name="email" id="email" autocomplete="off" > 
								<label for="email">Adresse email</label>
							</div>
							<div class="input-field col s12 m6">
								<input type="password" name="password" id="password" autocomplete="off" > 
								<label for="password">Mot de passe</label>
							</div>
							<div class="input-field col s12 m6">
								<input type="password" name="password_confirm" id="password_confirm" autocomplete="off" > 
								<label for="password_confirm">Confirmer le mot de passe</label>
							</div>


							<div class="input-field col s12 m6">
								<input type="text" name="telephone" id="telephone" autocomplete="off" > 
								<label for="telephone">Téléphone</label>
								
							</div>

							<div class="input-field col s12 m6">
					                    <select name="genre" id="role">
					                    
					                        <option value="M">Masculin</option>
					                        <option value="F">Féminin</option>
					                    </select>
					                    <label for="role">Genre</label>
					        </div>

							<div class="col s12">
								<button type="submit" name="submit" class="btn waves-effect blue-grey">
									M'inscrire
								</button>
							</div>
							
						</div>
				</form>