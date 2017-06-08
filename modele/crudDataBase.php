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

// function updateImg ($id, $name, $size, $type, $content, $ref) {
function updateImg ($id, $ref, $name, $size, $type, $content) {
	global $bdd;
  //
	// $req = $bdd->prepare('UPDATE INTO upload(name, size, type, content, ref) VALUES(:name, :size, :type, :content, :ref) WHERE id=:id');
  $req = $bdd->prepare('UPDATE upload SET ref=:newRef WHERE id=:id');
	$req->execute(array(
		'newRef' => $ref,
		// 'size' => $size,
		// 'type' => $type,
		// 'content' => $content,
		// 'ref' => $ref,
		'id' => $id
		));
	echo "modification effectuée";
}
