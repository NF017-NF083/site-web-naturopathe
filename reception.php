<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Ici se trouve les informations que vous avez envoyées sur notre site l'equilibre au naturel"
        <title>Envoi message</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
<?php
function spec_char($texte){
  if (preg_match("#[{}%]+#",$texte))
    {
    $texte = preg_replace('#[{}%]+#', '', $texte);
    ?>
    <p>Les caractères non souhaités  { } %  ont été supprimés de votre message</p><br>
    <?php
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
?>
<div class="presentation">
<p>Les informations suivantes ont été envoyées :</p>
<p>Nom et prénom :<?php echo $nom ?></p>
<p>Téléphone :<?php echo $tel ?></p>
<p>E-mail :<?php echo $mail ?></p>
<p>Sujet du message :<?php echo $sujet ?></p>
<p>Message :<?php echo $message ?></p>
<p>Date et heure d'envoi :<?php echo $heure ?></p>
</div>
<a class="liens" href="contact.php">Retourner</a>
</body>
</html>