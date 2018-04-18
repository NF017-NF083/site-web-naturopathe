
<footer>
    <a id="contact" href="contact.php">Contactez-moi</a>
    <a id="mentions" href="#">Mentions légales</a><br>
    <p id="concepteurs">
<?php
try
{
  $bdd = new PDO('mysql:host=lequilibiececile.mysql.db;dbname=lequilibiececile','lequilibiececile','AnkrGkkEqAmt1');;
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
echo 'Site conçu par  ';

$reponse = $bdd->query('SELECT * FROM user WHERE nom=\'Kaysi\' OR nom=\'Hainselin\' ');

while ($donnees = $reponse->fetch())
{
  echo '<a href="mailto:$donnees[\'email\']">'.$donnees['prenom'] ."  ".$donnees['nom'].'</a>' ;
}

$reponse->closecursor();

?>
</p>
</footer>