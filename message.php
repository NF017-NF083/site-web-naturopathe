<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Mes messages</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    <a href="logout.php" id="deconnexion">Déconnexion</a><br>
    <p id="login"><?php if (isset($_SESSION['login']))echo $_SESSION['login']; ?></p>
    <h2>Mes messages</h2>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=naturopathie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->query('SELECT * FROM message');
while ($donnees = $req->fetch()){
  $export[] = array($donnees["exp_nom_prenom"],$donnees["exp_telephone"],$donnees["exp_mail"],$donnees["sujet_message"],$donnees["message"],$donnees["heure_reception"]);
  ?>
  
  <div id="messages">
  <p><strong>Nom et prénom :</strong><?php echo $donnees["exp_nom_prenom"]; ?></p>
  <p><strong>Téléphone :</strong><?php echo $donnees["exp_telephone"]; ?></p>
  <p><strong>E-mail :</strong><?php echo $donnees["exp_mail"]; ?></p>
  <p><strong>Sujet :</strong><?php echo $donnees["sujet_message"]; ?></p>
  <p><strong>Message :</strong><?php echo $donnees["message"]; ?></p>
  <p><strong>Heure et date de réception :</strong><?php echo $donnees["heure_reception"]; ?></p>
  </div>
<?php
}
$output = fopen('messages.csv','w');
$entetes = array('Nom et prenom', 'Telephone', 'E-mail', 'Sujet', 'Message','Heure');
fputcsv($output, $entetes, ';');
foreach($export as $ligneaexporter){
        fputcsv($output, $ligneaexporter, ';');
}
$req->closeCursor(); 
fclose($output);
?>
<a class="liens" href="telecharger_messages.php">Télécharger fichier CSV</a>
<a class="liens" href="backoffice.php">Retour à ma page d'administration</a>