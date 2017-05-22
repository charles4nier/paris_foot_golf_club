<?php
require 'db_access.php';



function uploadImg ($name, $size, $type, $content) {
	global $bdd;

	$req = $bdd->prepare('INSERT INTO upload(name, size, type, content) VALUES(:name, :size, :type, :content)');
	$req->execute(array(
		'name' => $name,
		'size' => $size,
		'type' => $type,
		'content' => $content
		));
	echo "upload effectué";
}

function deleteImg ($id) {
	global $bdd;

	$id_image = $_GET['id'];
	$drop = $bdd->prepare('DELETE FROM upload WHERE id=:id');
	$drop->execute(array(
		'id' => $_GET['id']));

	echo "Drop de l'image $id_image effectué";
}
}