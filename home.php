<meta charset="utf-8">
<h2>Page d'acceuil</h2>
<div class="row">
	<div class="col s12 m12 l12">
	
		<div class="row">
					<div class="col s12 m4 l8">

				<?php

				$posts= get_posts();

				foreach ($posts as $post) {

					 ?>
					
						<div class="card">
							<div class="card-content">
							<h5 class="grey-text text-darken-2"> <?= $post->title; ?></h5>
							<h6 class="grey-text"> Le <?= date("d/m/Y à H:s", strtotime($post->date)); ?> Par <?= $post->name; ?></h6>
								
							</div>
							<div class="card-image waves-effect waves-block waves-light">
								
								<img style="width: 50%; height: 50%;" src="img/posts/<?= $post->image;  ?>"  class="activator" alt="<?= $post->title;  ?> " >
							</div>
							<div class="card-content">
								
								<span class="card-title activator grey-text text-darken-4"> <i class="material-icons right">more_vert</i></span>
								<p><a href="index.php?page=posts&id=<?= $post->id;  ?> ">Voir l'article complet</a></p>
							</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4	">
										<?= $post->title; ?> <i class="material-icons right">close</i>
									</span>	
									<p> <?= substr(nl2br($post->containte), 0,100); ?> ...</p>
								</div>
						</div>
					


				<?php
				 }
				 ?>


				</div>


				<div class="col s12 m4 ">

				</div>

				<div class="col s12 m4 l4">
						<h4>Les Posts Recents</h4>
						<hr/>
					<div class="card">
						<div class="card-content">
						<h5 class="grey-text text-darken-2"> LOUA FRANCK</h5>
						<h6 class="grey-text"> Le 02/11/2018 Par LOUA</h6>
							
						</div>
						
						<div class="card-content">
							

							<p><a href="#">Les articles</a></p>
						</div>
				
		
					</div>


					<h4>Les Catégories</h4>
						<hr/>
					<div class="card">
						<div class="card-content">
						<h5 class="grey-text text-darken-2"> LOUA FRANCK</h5>
						<h6 class="grey-text"> Le 02/11/2018 Par LOUA</h6>
							
						</div>
						
						<div class="card-content">
							
							<p><a href="#">Les articles</a></p>
							<p><a href="#">Les articles</a></p>
							<p><a href="#">Les articles</a></p>
							<p><a href="#">Les articles</a></p>
						</div>
				
		
					</div>


					<h4>Les News</h4>
						<hr/>
					<div class="card">
						<div class="card-content">
						<h5 class="grey-text text-darken-2"> LOUA FRANCK</h5>
						<h6 class="grey-text"> Le 02/11/2018 Par LOUA</h6>
							
						</div>
						
						<div class="card-content">
							
							<p><a href="#">Les articles</a></p>
							<hr/>
							<p><a href="#">Les articles</a></p>
							<hr/>
							<p><a href="#">Les articles</a></p>
							<hr/>
							<p><a href="#">Les articles</a></p>
						</div>
				
		
					</div>



					<h4>Les Commantaires Recents</h4>
						<hr/>
					<div class="card">
						<div class="card-content">
						<h5 class="grey-text text-darken-2"> LOUA FRANCK</h5>
						<h6 class="grey-text"> Le 02/11/2018 Par LOUA</h6>
							
						</div>
						
						<div class="card-content">
							
							<p><a href="#">Les articles</a></p>
							<hr/>
							<p><a href="#">Les articles</a></p>
							<hr/>
							<p><a href="#">Les articles</a></p>
							<hr/>
							<p><a href="#">Les articles</a></p>
						</div>
				
		
					</div>

				</div>

		</div>

	</div>
 </div>




 

<div class="col s12 m12 l12">
    <h2 >A propos de LOUA JG</h2>
    <hr/>
    <div class="row">
        <div class="col s12 m6 l3">

		        <strong>Qui suis-je?</strong>
		        <br/>Je m'appelle Jean, j'ai 24 ans, j'habite en Guinée et je suis passionné par tout ce qui touche à l'informatique. C'est pourquoi, depuis le 12 Avril 2019, date de création de ma chaîne, je fais des tutoriels pour vous apprendre la programmation WEB.
        </div>
        <div class="col s12 m6 l3">
		        <strong>Mes tutoriels</strong>
		        <br/>
		        Avant toutes choses, je fais mes tutoriels par passion et quand j'en ai le temps. En effet, étant à l'université, je n'ai pratiquement plus de temps pour programmer. De plus, j'essaie d'axer chaque tutoriel sur un sujet bien précis pour vous faciliter l'apprentissage.
        </div>
        <div class="col s12 m6 l3">
			        <strong>Mon matériel</strong>
			        <br/>
			        Je travaille uniquement sur Windows et lunix. J'ai un ordinateur portable de marque MICROSOFT avec un écran de 16". Il a 6 Gb de Ram, un processeur intel core I5 (6ème génération) et 500Gb de SSD. Selon moi, il ne faut pas plus pour faire de la programmation.
        </div>
        <div class="col s12 m6 l3">
		        <strong>Mes logiciels</strong>
		        <br/>
		        Pour programmer, j'utilise PHPStorm. Il s'agit certes d'un programme payant mais sachez qui est possible de l'utiliser gratuitement si vous êtes étudiant ou travaillez sur des projets open-source. Comme navigateur, j'utilise Google chrome et finalement, j'utilise CentOS (machine virtuelle) comme serveur.
        </div>
    </div>
</div>	
