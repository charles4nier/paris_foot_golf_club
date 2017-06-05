<?php

require '../modele/db_access.php';

$mail = $_POST['mail'];
$pass_hache = sha1($_POST['password']);

$req = $bdd->prepare('SELECT * FROM users WHERE mail = :mail AND pass = :pass');

$req->execute(array(
    'mail' => $mail,
    'pass' => $pass_hache));


$resultat = $req->fetch();


$adminConnected = false;

if (!$resultat)
{
    header("Location: http://localhost/paris_foot_golf_club/view/maquette.php");
    echo "Connexion refusée";
}
elseif (!isset($_SESSION['username'])) {
    session_start();
    $_SESSION['username'] = $resultat['name'];
    echo 'Vous êtes connecté ! <br>';
    echo 'Bonjour ' . $_SESSION['username'];
    header("Location: http://localhost/paris_foot_golf_club/view/maquette.php");

    $adminConnected = true;
    $_SESSION['admin'] =  $adminConnected;
}

?>
