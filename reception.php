<!DOCTYPE html>

<html>
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
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=naturopathie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO message(exp_nom_prenom,exp_telephone,exp_mail,sujet_message,message)VALUES(?,?,?,?,?)');
$nom=$_POST['nom'];$nom=spec_char($nom);
$tel=$_POST['tel'];$tel=spec_char($tel);
$mail=$_POST['mail'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];$message=spec_char($message);

$req->execute(array($nom,$tel,$mail,$sujet,$message));

echo 'Votre message a bien été envoyé .'.'<br>';
?>
<a class="liens" href="contact.php">Retourner</a>