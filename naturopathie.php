<?php
    setcookie("naturopathie","display",time()+31556926);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>L'équilibre au naturel - La naturopathie</title>
    <meta name="Description" content="Cécile Gragirena propose de vous apprendre à gérer vous même votre santé et vous accompagne dans votre réforme alimentaire."/>

</head>

<body>
    <a  href="index.php"><img src="img/banniere.jpg" alt="L'équilibre au naturel" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["naturopathie"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    
    <article class="presentation">
    <img src="img/naturopathie.jpg" alt="Naturopathie" width="300px">
    <?php
     include "conn_bdd.php" ;
      $reponse = $bdd->query('SELECT titre,article,categorie FROM content WHERE categorie="naturopathie"');

     while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { ?>
      <h1><?php echo $donnees['titre'];?>
      </h1>
      <p><?php echo nl2br($donnees['article']);?>
      </p>
     
     <?php
     }
     $reponse->closecursor();
     
    ?>
    </article>
    
    <div class="categories">
    <div class="cat"><a  href="naturopathie1.php" >Déroulement d'une consultation</a></div>
    <div class="cat"><a  href="naturopathie2.php">Tarifs</a></div>
    </div>
    
    <?php include "footer.php"; ?>
</body>

</html>