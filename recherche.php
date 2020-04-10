
<div class="container">
	<div class="row">

		<div class="col s12 m2 l6">
				<h5>Rechercher un article</h5>
			</div>


				<div class="input-field col s12 m10 l12">
						<form method="POST" action="" >
						   <input type="text" name="recherche" placeholder="Recherche d'un article..." />


						   <button class="btn btn-large scale-transition scale-out " name="envoie">
						    <i class="material-icons">search</i></button>
						</form>

				</div>


	</div>

</div>

<div class="row">
   <div class="col s12">



                <?php

                      $bdd = new PDO('mysql:host=127.0.0.1;dbname=siteweb;charset=utf8','root','');

                      //$articles = $bdd->query('SELECT title FROM posts ORDER BY id DESC');
                      if (isset($_POST['recherche'])) {

                            if(isset($_POST['recherche']) AND !empty($_POST['recherche'])) {
                         $q = htmlspecialchars($_POST['recherche']);
                         $articles = $bdd->query('SELECT * FROM posts WHERE  posted=1 AND title LIKE "%'.$q.'%"  ORDER BY id DESC');

                         if($articles->rowCount() > 0) {
                          echo '<div class="card">
                                           <div class="card-content">';
                            while($a = $articles->fetch()) { ?>


                                              <h4><img style="height: 90px;" src="img/posts/<?php echo  $a['image'] ?>" class="materialboxed responsive-img" alt="<?php echo $a['title']  ?>" /> <a href=index.php?page=posts&id=<?php echo $a['id'] ?>  > <?php echo $a['title'] ?> </a> </h4>

                                  <?php
                            }
                            echo '</div>
                                        </div>';

                         }
                         else {
                              echo  '<div class="card">
                                           <div class="card-content">
                                                <h4>  Aucun résultat pour : '. $q .' </h4>
                                           </div>
                                        </div>';
                            }
                      }


                      }

               ?>

   </div>
</div>

