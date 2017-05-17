<?php 

require 'dbaccess.php';

if(isset($_POST['submit']) && $_FILES['image']['size'] > 0) {

	$fileName = $_FILES['image']['name'];
	$tmpName  = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileType = $_FILES['image']['type'];

	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);

	if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

	$req = $bdd->prepare('INSERT INTO upload(name, size, type, content) VALUES(:name, :size, :type, :content)'); 
	$req->execute(array(
		'name' => $_FILES['image']['name'], 
		'size' => $_FILES['image']['size'],
		'type' => $_FILES['image']['type'],
		'content' => $content
		)); 
	echo "upload effectué";
}

$id_image = $_POST['id_image'];

if(isset($_POST['drop_id']) && isset($_POST['id_image'])) {
	$drop = $bdd->prepare('DELETE FROM upload WHERE id=:id');
	$drop->execute(array(
		'id' => $_POST['id_image']));

	echo "Drop de l'image $id_image effectué";
}

?>