<?php 

session_start();

unset($_SESSION['admin']);

header('Location: http://localhost/paris_foot_golf_club/view/maquette.php');