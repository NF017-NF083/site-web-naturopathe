<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Envoi message</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
<?php
function spec_char($texte){
  if (preg_match("#[{}%]+#",$texte))
    {
    $texte = preg_replace('#[{}%]+#', '', $texte);
    echo 'Les caractères non souhaités  { } %  ont été supprimés de votre message'.'<br>';
    }
  return $texte ;
}
include "conn_bdd.php" ;

$req = $bdd->prepare('INSERT INTO message(exp_nom_prenom,exp_telephone,exp_mail,sujet_message,message,heure_reception)VALUES(?,?,?,?,?,?)');
$nom=$_POST['nom'];$nom=spec_char($nom);
$tel=$_POST['tel'];$tel=spec_char($tel);
$mail=$_POST['mail'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];$message=spec_char($message);
$heure=date('Y-m-d G:i:s');

$req->execute(array($nom,$tel,$mail,$sujet,$message,$heure));

echo 'Votre message a bien été envoyé .'.'<br>';
?>
<a class="liens" href="contact.php">Retourner</a>