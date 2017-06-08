<?php
// require 'issetPost.php';

require '../modele/crudDataBase.php';

echo $_POST['idArticle'];
echo $_POST['refEditArticle'];

updateImg($_POST['idArticle'], $_POST['refEditArticle']);

// updateImg($_POST['idArticle'], $fileName, $fileSize, $fileType, $content, $ref);

header('Location: http://localhost/paris_foot_golf_club/controller/eboutique.php');
