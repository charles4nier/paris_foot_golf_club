<?php 

require '../modele/db_access.php';

$name = $_POST['login'];
$pass_hache = sha1($_POST['password']);

var_dump($name);
var_dump($pass_hache);

$req = $bdd->prepare('SELECT * FROM users WHERE name = :name AND pass = :pass');

$req->execute(array(
    'name' => $name,
    'pass' => $pass_hache));


$resultat = $req->fetch();


if (!$resultat)
{
    // header("Location: http://localhost/footgolf/paris_foot_golf_club/view/maquette.html");
    echo "Connexion refusée";
}
elseif (!isset($_SESSION['username'])) {
    $_SESSION['username'] = $resultat['name']; 
    echo 'Vous êtes connecté ! <br>';
    echo 'Bonjour ' . $_SESSION['username'];

    
}

?>
