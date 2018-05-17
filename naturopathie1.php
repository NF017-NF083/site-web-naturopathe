<?php
    setcookie("naturopathie1","display",time()+31556926);
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>L'équilibre au naturel - La naturopathie</title>
    <meta name="Description" content="Cécile Gragirena propose de vous apprendre à gérer vous même votre santé en expliquant comment se déroulera la consulatation.">
</head>

<body>
    <a  href="index.php"><img src="img/banniere.jpg" alt="L'équilibre au naturel" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["naturopathie1"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <article class="presentation">
    
    <?php
     include "conn_bdd.php" ;
      $reponse = $bdd->query('SELECT titre,article,categorie FROM content WHERE categorie="naturopathie1"');

     while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { ?>
      <h1><?php echo htmlspecialchars($donnees['titre']);?>
      </h1>
      <p><?php echo nl2br(htmlspecialchars($donnees['article']));?>
      </p>
     
     <?php
     }
     $reponse->closecursor();
     
    ?>
    </article>
    
    
    <?php include "footer.php"; ?>
</body>

</html>