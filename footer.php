
<footer>
    <a id="contact" href="contact.php">Contactez-moi</a>
    <a id="mentions" href="mentions_legales.php">Mentions légales</a><br>    
    <p id="concepteurs">
<?php
include "conn_bdd.php" ;
echo 'Site conçu par  ';

$reponse = $bdd->query('SELECT * FROM user WHERE nom=\'Kaysi\' OR nom=\'Hainselin\' ');

while ($donnees = $reponse->fetch())
{
  echo $donnees['prenom'] ."  ".$donnees['nom']."  ";
}

$reponse->closecursor();

?>
</p>
</footer>