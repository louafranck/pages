
<h2>Contactez nous</h2>
<div class="row">

<div class="col m9 s12">

<h4>Laissez un message</h4>


<?php
            if(isset($_POST['submit'])){

                $name = htmlspecialchars(trim($_POST['name']));
                $email = htmlspecialchars(trim($_POST['email']));
                $telephone = htmlspecialchars(trim($_POST['telephone']));
                $adresse = htmlspecialchars(trim($_POST['adresse']));
                $message = htmlspecialchars(trim($_POST['message']));


                $errors = [];

                if(empty($name) || empty($email) || empty($telephone) || empty($adresse) || empty($message)){
                    $errors['empty'] = "Veuillez remplir tous les champs";
                }
                else if (!is_numeric($telephone)) {
                    $errors['empty'] = "Veuillez Saisir des chaines numérique";
                } else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                    $errors['emailv'] = "Veuillez Saisir un email valide";
                }


                if(!empty($errors)){
                    ?>
                        <div class="card red">
                            <div class="card-content white-text">
                                <?php
                                foreach($errors as $error){
                                    echo $error."<br/>";
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                }else{
                        contact_users($name,$telephone,$email,$adresse,$message);
                     ?>
                    <div class="card green">
                            <div class="card-content white-text">
                                <?php
                                echo "Nous vous remercions de nous avons contactez, merci pour votre fidélité !";
                                header("refresh:2;index.php?page=contact");
                                ?>
                            </div>
                        </div>
                        <?php
                }
            }


        ?>


<form method="POST" autocomplete="off">
	<div class="row card">
    <div class="card-content">
		<div class="input-field col s12">
			<input type="text" name="name" id="name"/>
			<label for="name">Nom complet</label>
		</div>
        <div class="input-field col s12">
            <input type="text" name="telephone" id="telephone"/>
            <label for="telephone">Téléphone</label>
        </div>
       <!--  <div class="input-field col s12">
            <input type = "text" name="datep" id="datep" class="datapicker" />
            <label for="datep">Date de naissance</label>
        </div> -->

		<div class="input-field col s12">
			<input type="email" name="email" id="email"/>
			<label for="email">Email</label>
		</div>
        <div class="input-field col s12">
            <input type="text" name="adresse" id="adresse"/>
            <label for="adresse">Adresse</label>
        </div>

		<div class="input-field col s12">
                   <textarea  name="message" id="message" class="materialize-textarea"></textarea>
                    <label for="message">Message</label>
         </div>

                <div class="col s12 right-align">
                    <button type="submit" name="submit" class="btn-floating btn-large waves-effect">
                    	<i class="material-icons">message</i>
                    </button>
                </div>
                <div class="col s12"><br/></div>
	</div>
    </div>
</form>

</div>

<div class="col m3 s12">
<h2>Information</h2>
<p>Le blog des génies ne tardera pas de vous répondre dans les brefs délais</p>
<h5>Contactez nous sur :</h5>
<p>
<a href="http://www.facebook.com" class="_target btn-floating blue waves-effect text-light" title="Lien vers la page facebook"><i class="material-icons">face</i></a>
<a href="http://www.youtube.com" class="_target btn-floating red waves-effect text-light" title="Lien vers la page youtube"><i class="material-icons">youtube_searched_for</i></a>

<a href="http://www.facebook.com" class="target btn-floating blue waves-effect text-light" title="Lien vers la page recherche sur le blog"><i class="material-icons">share</i></a>
<a href="http://www.youtube.com" class="_target btn-floating green waves-effect text-light" title="Ligne d'appel du blog"><i class="material-icons">call</i></a>

</p>


<div class="card">
    <div class="card-content">
        <h5>Contactez nous sur:</h5>
            <p>
            <a href="http://www.facebook.com" class="_target btn-floating blue waves-effect text-light" title="Lien vers la page facebook"><i class="material-icons">face</i></a>
            <a href="http://www.youtube.com" class="target btn-floating red waves-effect text-light" title="Lien vers la page youtube"><i class="material-icons">youtube_searched_for</i></a>

            <a href="http://www.facebook.com" class="_target btn-floating blue waves-effect text-light" title="Lien vers la page recherche sur le blog"><i class="material-icons">share</i></a>
            <a href="http://www.youtube.com" class="_target btn-floating green waves-effect text-light" title="Ligne d'appel du blog"><i class="material-icons">call</i></a>

            </p>
    </div>
</div>
</div>
</div>

<div class="row">
    <div class="col m11 s12"></div>
    <div class="col m1 s12 ">
        <div class="fixed-action-btn">
             <a href="#" class="btn-floating btn-large white-text red waves-effect"><i class="large material-icons">mode_edit</i></a>
             <ul>
                 <li><a href="#" class="btn-floating btn-large blue white-text waves-effect"><i class="large material-icons">insert_chart</i></a> </li>
                 <li><a href="#" class="btn-floating btn-large blue white-text waves-effect"><i class="large material-icons">format_quotes</i></a> </li>
                 <li><a href="#" class="btn-floating btn-large yellow white-text waves-effect"><i class="large material-icons">publish</i></a> </li>
                  <li><a class="btn-floating btn-large orange white-text waves-effect modal-trigger" href="#modal1" ><i class="large material-icons">attach_file</i></a> </li>
             </ul>
        </div>

    </div>
</div>
                 <a class="btn btn-small waves-effect waves-light blue modal-trigger" href="#modal1">
                        <i class="material-icons">more_vert</i>
                    </a>
                            <!-- Modal Structure -->
                      <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                          <h4>TEST MODAL</h4>
                             <p>Commentaire posté par
                             </p>
                             <hr/>
                            <p>Contenu du message</p>

                        </div>
                        <div class="modal-footer">
                            <a href="#"  class="modal-action modal-close waves-effect waves-red btn-flat delete_comment">
                                <i class="material-icons">delete</i>
                            </a>
                            <a href="#"  class="modal-action modal-close waves-effect waves-green btn-flat see_comment">
                                <i class="material-icons">done</i>
                            </a>
                        </div>
                      </div>
<!-- <div class="row">
    <div class="col m11 s12">
        <a href="#" class="btn waves-effect white-text" onclick="showToast('super cool ce m de flash',7000)" >Alert Flash</a>
    </div>

</div> -->
<script type="text/javascript">
    $(document).ready(function(){
            $('.fixed-action-btn').floatingActionButton();

    });
</script>

<!-- <script type="text/javascript">
    $(document).ready(function(){
            $('.datapicker').datepicker();

    });
</script> -->

<!-- <script type="text/javascript">
   function showToast(message, duration){
    Materialize.toast('<i class="material-icons" style="color:#fff;">label '+ message + '</i>', duration,'rounded');
   }
</script> -->
