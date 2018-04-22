<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/styles.css">
        <title>Gestion des articles</title>

    </head>
    <body>
   <a href="logout.php" id="deconnexion">Déconnexion</a><br>
    <p id="login"><?php if (isset($_SESSION['login']))echo $_SESSION['login']; ?></p>
      <?php
     try
   {
      $bdd = new PDO('mysql:host=localhost;dbname=naturopathie','root','', array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
   }
     catch(Exception $e)
   {
        die('Erreur : '.$e->getMessage());
   }

   if(isset($_GET['id'])){
     $reponse = $bdd->prepare('DELETE FROM content WHERE ID=:id');
     $reponse -> execute(array('id' => $_GET['id']));
     echo "L'article a été supprimé ";
     
   }
   ?>
   <a class="liens" href="backoffice.php">Retour au backoffice</a>
    </body>
</html>