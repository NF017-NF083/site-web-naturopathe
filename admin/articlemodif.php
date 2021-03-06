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
      <h1>Gestion des articles</h1>
      <?php
     include "../conn_bdd.php" ;
   // modification d'un article
   if(isset($_GET['id']))
   {
      $reponse = $bdd->prepare('SELECT ID,titre,article,categorie FROM content WHERE ID=:id');
      $reponse -> execute(array('id' => $_GET['id']));

     if($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { ?>
   <div class="presentation">
     <form method="POST" action="">
     <h2><?php echo $donnees["categorie"];?></h2>
    <label for "titre" >Titre</label>
    <textarea  name="titre" cols=50 ><?php echo $donnees["titre"];?></textarea><br>
    <label for "article">Article</label>
    <textarea name="article" rows=50 cols=100 ><?php echo $donnees["article"];?></textarea><br>
    <div class="boutons">
    <input type="submit" name="submit" value="Modifier" />
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
          <option value="index">Index</option>
          <option value="naturopathie">Naturopathie</option>
          <option value="naturopathie1">Naturopathie1</option>
          <option value="sophrologie">Sophrologie</option>
          <option value="sophrologie1">Sophrologie1</option>
     </select>
     </p>
    <label for "titre" >Titre</label>
    <textarea  name="titre" cols=50 ></textarea><br>
    <label for "article">Article</label>
    <textarea name="article" rows=50 cols=100 ></textarea><br>
    <div class="boutons">
    <input type="submit" name="submit" value="Ajouter"/>
    </div>
    </form>
    </div>
   <?php
   }
   ?>
   
   
    <?php

    if((isset($_POST['submit'])) AND (isset($_GET['id']))){
      
        $req = $bdd->prepare('UPDATE content SET titre=?,article=?,date_derniere_mod=?,mod_par_admin=? WHERE ID=?');
        $titre=strip_tags($_POST['titre'],"<strong>");
        $article=strip_tags($_POST['article'],"<strong>");
        $date=date('Y-m-d G:i:s');
        $admin=$_SESSION['login'];
        $ID=$_GET['id'];
        $req->execute(array($titre,$article,$date,$admin,$ID));
        ?>
        
        <p>Article modifié </p>
        
        <?php
        $req->closecursor();
    }
    elseif ((isset($_POST['submit'])) AND (!isset($_GET['id'])))
    {
    $req = $bdd->prepare('INSERT INTO content(titre,article,categorie,date_derniere_mod,mod_par_admin) VALUES(?,?,?,?,?)');
    $titre=strip_tags($_POST['titre'],"<strong>");
    $article=strip_tags($_POST['article'],"<strong>");
    $categorie=$_POST['categorie'];
    $date=date('Y-m-d G:i:s');
    $admin=$_SESSION['login'];
    $req->execute(array($titre,$article,$categorie,$date,$admin));
    ?>
    
    <p>Article ajouté </p>
    
    <?php
    }
    
?>
        <a class="liens" href="backoffice.php">Retour au backoffice</a>
    </body>
</html>