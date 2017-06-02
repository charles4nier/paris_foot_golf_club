<?php
session_start();

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$phone = $_POST['telephone'];
$mail_delivery = $_POST['mail'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$article = $_POST['article'];
$quantité = $_POST['quantité'];
$taille = $_POST['taille'];
$mail_sender = 'victor.m.valente@gmail.com';
if (isset($_POST['submit'])) {

$mail = 'weaponsb@mail.fr'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail_sender)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "BOUTIQUE \n Prénom : " .$prenom. " \n Nom : " .$nom. " \n Télephone : " .$phone. " \n Email : " .$mail_delivery. " \n Adresse : " .$adresse. " \n Ville : " .$ville. " \n Article : " .$article. " \n Quantité : " .$quantité. " \n Taille : " .$taille. "";
// A tester
$message_html = "<html><head></head>
<body>
	<h1>BOUTIQUE</h1>
	<ol>
	<li>Prénom : ".$prenom."</li>
	<li>Nom : ".$nom."</li>
	<li>Email : ".$mail_delivery."</li>
	<li>Téléphone : ".$phone."</li>
	<li>Adresse : ".$adresse."</li>
	<li>Ville : ".$ville."</li>
	<li>Article : ".$article."</li>
	<li>Quantité : ".$quantité."</li>
	<li>Taille : ".$taille."</li>
	</ol>
</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Achat Boutique";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"Victor\"< " .$mail_sender. " >".$passage_ligne;
$header.= "Reply-to: \"Victor\" < " .$mail_sender. " >".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail_delivery,$sujet,$message,$header);
//==========

$_SESSION['text_command'] = "Merci pour votre commande, nous vous recontacterons très vite !";
header('location:../view/eboutique.php');

}
?>
