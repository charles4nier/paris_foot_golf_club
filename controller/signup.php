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
isset($_POST['mail'])
// isset($_POST['password'])


) {

	$pack = $_POST['pack'];
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom']; 
	$age = $_POST['age']; 
	$sexe = $_POST['sexe']; 
	$cm = $_POST['cm?']; 
	$ville = $_POST['ville']; 
	$adresse = $_POST['adresse']; 
	$telephone = $_POST['telephone']; 
	$mail = $_POST['mail']; 
	$pass_hache = sha1($_POST['password']);


require 'db_access.php';


$content = $bdd->prepare('INSERT INTO users(firstname, lastname, pack, mail, pass, date, age, sexe, cm, ville, adresse, phone) VALUES(:firstname, :lastname, :pack, :mail, :pass, CURDATE(), :age, :sexe, :cm, :ville, :adresse, :phone)'); 
$content->execute(array(
	'firstname' => $firstname, 
	'lastname' => $lastname, 
	'pack' => $pack,
	'mail' => $mail,
	'pass' => $pass_hache,
	'age' => $age,
	'sexe' => $sexe,
	'cm' => $cm,
	'ville' => $ville,
	'adresse' => $adresse,
	'phone' => $phone
 	)); 

var_dump($content);

$content->closeCursor(); 
}

?>