<?php
require 'issetPost.php';

require '../modele/crudDataBase';

uploadImg($_FILES['image']['name'], $_FILES['image']['size'], $_FILES['image']['size'], $_FILES['image']['type'],  $content);

$id_image = $_POST['id_image'];

if(isset($_POST['drop_id']) && isset($_POST['id_image'])) {
	$drop = $bdd->prepare('DELETE FROM upload WHERE id=:id');
	$drop->execute(array(
		'id' => $_POST['id_image']));

	echo "Drop de l'image $id_image effectué";
}
