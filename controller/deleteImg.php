<?php 

require 'issetPost.php';

require '../modele/crudDataBase.php';

deleteImg($_GET['id']);

header('Location: http://localhost/footgolf/paris_foot_golf_club/view/eboutique.php');