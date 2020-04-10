<?php
	$post = get_postsid();
	if ($post == false) {
		header("Location:index.php?page=error");
	} else{

 ?>
 </div>

	<div class="parallax-container">
		<div class="parallax">
	 		<img style="height: 50px;" src="img/posts/<?php echo  $post->image ?>" alt="<?php echo $post->title ?>" />
	 	</div>

 	</div>
 	<br/>
 <div class="container">
 <h2><?= $post->title; ?></h2>
 <h6 class="grey-text">Par <?= $post->name; ?> le <?= date("d/m/Y à H:s", strtotime($post->date)); ?> </h6>
 <p> <?= nl2br($post->containte); ?></p>
  <?php
	}

 ?>
<hr/>

<h4>Commentaires :</h4>
<?php
/* affichage des commentaires sur un article*/

		$responses = get_comments();
		if ($responses != false) {
			foreach ($responses as $response) {
			?>

			<blockquote>
				<strong><?php echo $response->name; ?> (<?php echo date("d/m/Y", strtotime($response->datec)) ; ?>)</strong>
				<p><?php echo nl2br($response->comments) ; ?></p>
			</blockquote>

			<?php
		}
		} else{
			echo "Aucun commentaire n'a été publié sur ce article soyez le premier !";
		}

			$users_comments= get_users_comments();
			/*if ($users_comments != false) {
					?>
							<h2><?= $users_comments['pseudo']; ?></h2>
					<?php
				}*/
 ?>
<h4>Commenter :</h4>

<?php
		if (isset($_POST['submit']))
		{

		$name = htmlspecialchars(trim($users_comments['pseudo']));
		$email = htmlspecialchars(trim($users_comments['email']));
		$comments = htmlspecialchars(trim($_POST['commentaire']));
		$errors = [];

		if (empty($comments)) {

			$errors['empty'] = "Le champs commentaire est obligatoire";

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

		comment($name,$email,$comments);
						$id = $_GET['id'] ;
					header('refresh:1;index.php?page=posts&id='.$id);
		?>

<!-- <script type="text/javascript">
			window.Location.replace("index.php?page=posts&id=<//?php echo $_GET['id'] ?>");
		</script> -->

		<?php

		}


		}

?>

<?php

	if (!isset($_SESSION['admin'])) {
            ?>

			    <div class="col s12">
					<a href="index.php?page=compteuser" class="btn waves-effect blue">Connectez vous pour laisser un commentaire</a>
				</div>

            <?php
   } else {
   			?>


   				<form method="post">
						<div class="row">
							<!-- <div class="input-field col s12 m6">
								<input type="text" name="nom" id="nom" autocomplete="off" >
								<label for="nom">Nom</label>
							</div>
							<div class="input-field col s12 m6">
								<input type="text" name="email" id="email" autocomplete="off" >
								<label for="email">Adresse email</label>
							</div> -->


							<div class="input-field col s12 ">
								<textarea  name="commentaire" id="commentaire" class="materialize-textarea"> </textarea>
								<label for="commentaire"> Commentaire </label>

							</div>

							<div class="col s12">
								<button type="submit" name="submit" class="btn waves-effect">
									Commentez ce post
								</button>
							</div>

						</div>
				</form>

   			<?php



   }


 ?>
 <div class="col s12"> <br/></div>

