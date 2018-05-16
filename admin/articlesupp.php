
<?php
session_start();
if (empty($_SESSION['login'])){
  header('Location: ../connexion.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/styles.css">
        <title>Gestion des articles</title>

    </head>
    <body>
   <a href="logout.php" id="deconnexion">Déconnexion</a><br>
    <p id="login"><?php if (isset($_SESSION['login']))echo $_SESSION['login']; ?></p>
      <?php
     include "../conn_bdd.php" ;

   if(isset($_GET['id'])){
     $reponse = $bdd->prepare('DELETE FROM content WHERE ID=:id');
     $reponse -> execute(array('id' => $_GET['id']));
     ?>
     
     <p>L'article a été supprimé </p>
     
     <?php
   }
   ?>
   
   <a class="liens" href="backoffice.php">Retour au backoffice</a>
    </body>
</html>