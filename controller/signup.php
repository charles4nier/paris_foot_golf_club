<?php

if (

isset($_POST['pack']) &&
isset($_POST['prenom']) &&
isset($_POST['nom']) &&
isset($_POST['age']) &&
isset($_POST['sexe']) &&
isset($_POST['cm?']) &&
isset($_POST['ville']) &&
isset($_POST['adresse']) &&
isset($_POST['telephone']) &&
isset($_POST['mail']) &&
isset($_POST['pass'])

) {

	$pack = $_POST['pack'];
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$age = $_POST['age'];
	$sexe = $_POST['sexe'];
	$cm = $_POST['cm?'];
	$ville = $_POST['ville'];
	$adresse = $_POST['adresse'];
	$phone = $_POST['telephone'];
	$mail = $_POST['mail'];
	$pass_hache = sha1($_POST['pass']);

require '../modele/db_access.php';

// require '../modele/'

$req = $bdd->prepare('INSERT INTO users(firstname, lastname, pack, mail, pass, age, sexe, cm, ville, adresse, phone) VALUES (:firstname, :lastname, :pack, :mail, :pass, :age, :sexe, :cm, :ville, :adresse, :phone)');
$req->execute(array(
	'age' => $age,
	'phone' => $phone,
	'lastname' => $nom,
	'firstname' => $prenom,
	'mail' => $mail,
	'sexe' => $sexe,
	'cm' => $cm,
	'ville' => $ville,
	'adresse' => $adresse,
	'pass' => $pass_hache,
	'pack' => $pack
	));

header("Location: http://localhost/paris_foot_golf_club/controller/index.php");

$req->closeCursor();
}


?>
