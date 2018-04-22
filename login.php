
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
      $bdd = new PDO('mysql:host=lequilibiececile.mysql.db;dbname=lequilibiececile;charset=UTF8','lequilibiececile','AnkrGkkEqAmt1');
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
         header('Location:backoffice.php');
     }
     else  {
         echo 'Compte non reconnu'.'<a class="liens" href="connexion.php">Retourner à la page de connexion </a>';
         
           }
     $reponse->closecursor();
     
    ?>
        
        
    </body>
</html>