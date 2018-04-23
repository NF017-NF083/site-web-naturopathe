<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/styles.css">
        <title>Gestion des tarifs</title>

    </head>
    <body>
   <a href="logout.php" id="deconnexion">Déconnexion</a><br>
    <p id="login"><?php if (isset($_SESSION['login']))echo $_SESSION['login']; ?></p>
      <h1>Gestion des tarifs</h1>
      <?php
     try
   {
      $bdd = new PDO('mysql:host=lequilibiececile.mysql.db;dbname=lequilibiececile;charset=UTF8','lequilibiececile','AnkrGkkEqAmt1');
   }
     catch(Exception $e)
   {
        die('Erreur : '.$e->getMessage());
   }
   // modification d'un article
   if(isset($_GET['id']))
   {
      $reponse = $bdd->prepare('SELECT * FROM tarifs WHERE ID=:id');
      $reponse -> execute(array('id' => $_GET['id']));

     if($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { ?>
   <div class="presentation">
     <form method="POST" action="">
     <h2><?php echo $donnees["categorie"];?></h2>
    <label for "prestation" >Prestation</label>
    <textarea  name="prestation" cols=50 ><?php echo $donnees["prestation"];?></textarea><br>
    <label for "prix">Prix</label>
    <textarea name="prix"  ><?php echo $donnees["prix"];?></textarea><br>
    <div class="boutons">
    <input type="submit" name="submit" value="Modifier">
    </div>
    </form>
    </div>
    <?php
     }
     $reponse->closecursor();
   }
    //
   else {
     
     ?>
     <div class="presentation">
     <form method="POST" action="">
     <p>
        <select name="categorie">
          <option value="sophrologie2">Sophrologie2</option>
          <option value="naturopathie2">Naturopathie2</option>
     </select>
     </p>
    <label for "prestation" >Prestation</label>
    <textarea  name="prestation" cols=50 ></textarea>
    <label for "prix">Prix</label>
    <textarea name="prix"  ></textarea><br>
    <div class="boutons">
    <input type="submit" name="submit" value="Ajouter">
    </div>
    </form>
    </div>
   <?php
   }
   ?>
   
   
    <?php

    if((isset($_POST['submit'])) AND (isset($_GET['id']))){
      
        $req = $bdd->prepare('UPDATE tarifs SET prestation=?,prix=? WHERE ID=?');
        $prestation=$_POST['prestation'];
        $prix=$_POST['prix'];
        $ID=$_GET['id'];
        $req->execute(array($prestation,$prix,$ID));
            echo 'Prestation modifiée';
        $req->closecursor();
    }
    elseif ((isset($_POST['submit'])) AND (!isset($_GET['id'])))
    {
    $req = $bdd->prepare('INSERT INTO tarifs(prestation,prix,categorie) VALUES(?,?,?)');
    $prestation=$_POST['prestation'];
    $prix=$_POST['prix'];
    $categorie=$_POST['categorie'];
    
    $req->execute(array($prestation,$prix,$categorie));
      echo 'Prestation ajoutée';
    }
    
?>
    
        <a class="liens" href="backoffice.php">Retour au backoffice</a>
    </body>
</html>