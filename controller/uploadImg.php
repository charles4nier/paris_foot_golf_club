<?php
require 'issetPost.php';

require '../modele/crudDataBase.php';

uploadImg($_FILES['image']['name'], $_FILES['image']['size'], $_FILES['image']['type'],  $content);

header('Location: http://localhost/footgolf/paris_foot_golf_club/view/eboutique.php');