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
        <title>Connexion au BackOffice</title>

    </head>
    <body>
   <a href="logout.php" id="deconnexion">Déconnexion</a><br>
    <p id="login"><?php if (isset($_SESSION['login']))echo $_SESSION['login']; ?></p>
    
     <h1>Administrer mon site</h1>
        <a class="liens" href="message.php">Consulter mes messages</a>
        <h2>Mes articles</h2>
    <?php
     include "../conn_bdd.php" ;
      $reponse = $bdd->query('SELECT ID,titre,article,categorie,date_derniere_mod,mod_par_admin FROM content');

     while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { 
      ?>
      
        <div class="modif">
        <div class="articlemodif"><h2>Article</h2>
        <a href="articlemodif.php?id=<?php echo $donnees['ID'];?>">
        <p><?php echo $donnees['titre'];?><br>
        <?php echo $donnees['article'];?></p>
        </a>
        </div>
        <div class="articlemodif"><h2>Catégorie</h2>
        <?php echo $donnees['categorie'];?>
        </div>
        <div class="articlemodif"><h2>Date de la dernière modification</h2>
        <?php echo $donnees['date_derniere_mod'];?>
        </div>
        <div class="articlemodif"><h2>Modifié pour la dernière fois par </h2>
        <?php echo $donnees['mod_par_admin'];?>
        </div>
        <div class="articlemodif"><a class="liens" href="articlemodif.php?id=<?php echo $donnees['ID'];?>">Modifier l'article</a></div>
        <div class="articlemodif"><a class="liens" href="articlesupp.php?id=<?php echo $donnees['ID'];?>">Supprimer l'article</a></div>
       
        </div>
        
        <?php
        }
     $reponse->closecursor();
        ?>
        <a class="liens" href="articlemodif.php">Ajouter un article</a>
        
        <h2>Mes tarifs</h2>
        
        <?php 
        $reponse = $bdd->query('SELECT ID,prestation,prix,categorie FROM tarifs');

     while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { 
   ?>
   <div class="modif">
   <div class="articlemodif"><a href="tarifsmodif.php?id=<?php echo $donnees['ID'];?>"><?php echo $donnees['prestation']; ?></div>
   <div class="articlemodif"><a href="tarifsmodif.php?id=<?php echo $donnees['ID'];?>"><?php echo $donnees['prix'].' €'; ?></div>
   <div class="articlemodif"><a href="tarifsmodif.php?id=<?php echo $donnees['ID'];?>"><?php echo $donnees['categorie']; ?></div>
   <div class="articlemodif"><a class="liens" href="tarifsmodif.php?id=<?php echo $donnees['ID'];?>">Modifier la prestation</a></div>
   <div class="articlemodif"><a class="liens" href="tarifsupp.php?id=<?php echo $donnees['ID'];?>">Supprimer la prestation</a></div>
   </div>
 <?php 
     }
    
  $reponse->closecursor();
    ?> 
 
        <a class="liens" href="tarifsmodif.php">Ajouter une prestation</a>
    </body>
</html>