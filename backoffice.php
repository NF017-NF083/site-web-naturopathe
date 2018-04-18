<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>BackOffice de mon site</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    
   <?php
     try
   {
      $bdd = new PDO('mysql:host=lequilibiececile.mysql.db;dbname=lequilibiececile','lequilibiececile','AnkrGkkEqAmt1');
   }
     catch(Exception $e)
   {
        die('Erreur : '.$e->getMessage());
   }
      
      $reponse = $bdd->prepare('SELECT * FROM user WHERE login=? AND mdp= ?');
      $reponse->execute(array($_POST['login'], $_POST['mdp']));

     if ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     {   
         session_start(); 
         $_SESSION['login']=$_POST['login'];
         include 'bouton_deconnexion.php';
         ?>
         <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p> 
<?php        
     }
     else  {
         echo 'Compte non reconnu'.'<a href="connexion.php">Retourner à la page de connexion </a>';
         
           }
     $reponse->closecursor();
     
    ?>
        
        
    
    </body>
</html>