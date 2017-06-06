<?php
require 'db_access.php';



function uploadImg ($name, $size, $type, $content, $ref) {
	global $bdd;

	$req = $bdd->prepare('INSERT INTO upload(name, size, type, content, ref) VALUES(:name, :size, :type, :content, :ref)');
	$req->execute(array(
		'name' => $name,
		'size' => $size,
		'type' => $type,
		'content' => $content,
		'ref' => $ref
		));
	echo "upload effectué";
}

function deleteImg ($id) {
	global $bdd;

	$id_image = $id;
	$drop = $bdd->prepare('DELETE FROM upload WHERE id=:id');
	$drop->execute(array(
		'id' => $id_image));

	echo "Drop de l'image $id_image effectué";
}


