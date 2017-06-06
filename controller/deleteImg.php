<?php 

require 'issetPost.php';

require '../modele/crudDataBase.php';

deleteImg($_GET['deleteArticle']);

header('Location: http://localhost/paris_foot_golf_club/view/eboutique.php');