<?php
require 'issetPost.php';

require '../modele/crudDataBase.php';

uploadImg($_GET['updateArticle'], $fileName, $fileSize, $fileType, $content, $ref);

header('Location: http://localhost/paris_foot_golf_club/controller/eboutique.php');
