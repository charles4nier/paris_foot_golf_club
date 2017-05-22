<?php
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

}

if (isset($_GET['id'])) {


	
}
