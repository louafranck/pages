<?php



if (!isset($_SESSION['admin'])) {
            header("Location:index.php");
   }


global $db;
$info = $_SESSION['admin'];
$req = $db->prepare('SELECT * FROM utilisateur WHERE email = ?');
$req->execute([$info]);
$user = $req->fetch();

if ($user) {

	 echo '<h1>Bonjour '.  $user["pseudo"] .'</h1>';
   echo '<h1>Email : '.  $user['email'] .'</h1>';
   echo '<h1>Contact : '.  $user['telephone'] .'</h1>';
}


   ?>

