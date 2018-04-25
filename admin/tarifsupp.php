<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/styles.css">
        <title>Gestion des articles</title>

    </head>
    <body>
   <a href="logout.php" id="deconnexion">Déconnexion</a><br>
    <p id="login"><?php if (isset($_SESSION['login']))echo $_SESSION['login']; ?></p>
      <?php
     try
   {
      $bdd = new PDO('mysql:host=lequilibiececile.mysql.db;dbname=lequilibiececile;charset=UTF8','lequilibiececile','AnkrGkkEqAmt1');
   }
     catch(Exception $e)
   {
        die('Erreur : '.$e->getMessage());
   }

   if(isset($_GET['id'])){
     $reponse = $bdd->prepare('DELETE FROM tarifs WHERE ID=:id');
     $reponse -> execute(array('id' => $_GET['id']));
     echo "La prestation a été supprimée ";
     
   }
   ?>
   <a class="liens" href="backoffice.php">Retour au backoffice</a>
    </body>
</html>