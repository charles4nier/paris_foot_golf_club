<?php
$user = 'root';
$pwd = 'coucou1948';
try {
    $bdd = new PDO('mysql:host=localhost;dbname=footgolf;charset=utf8', $user, $pwd, array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
