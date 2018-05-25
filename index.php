<?php
    setcookie("index","display",time()+31556926);
?>

<!doctype html>
<html lang="fr">
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/styles.css">
     <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
     <link rel="icon" href="img/favicon.ico" type="image/x-icon">
     <title>L'équilibre au naturel-Cécile Gragirena naturopathe sophrologue Orléans et Saint Pryvé Saint Mesmin(45)</title>
<meta name="Description" content="Cécile Gragirena vous accompagne si vous souhaitez modifier vos habitudes de vie,perdre du poids, mieux gérer votre stress ou être suivi pour une pathologie particulière">
<meta name="Identifier-Url" content="www.lequilibreaunaturel.fr">
    <!--Balise pour google search console pour prouver que c'est bien nous-->
    <meta name="google-site-verification" content="HC5GwfmBaMajleBORG-x9pdlVGcECmiELkKiKyBROBA" />
    <!-- Code google analytics a mettre dans chaque page qu'on souhaite suivre-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117869108-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117869108-1');
</script>
 </head>

<body>

    <?php include 'bouton_connexion.php'; ?>
    <a  href="index.php"><img src="img/banniere.jpg" alt="L'équilibre au naturel" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["index"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>";?>  
    
    <article class="presentation">
    <img src="img/photo.jpg" alt="Cécile Gragirena">
    <?php
     include "conn_bdd.php" ;
      $reponse = $bdd->query('SELECT titre,article,categorie FROM content WHERE categorie="index"');

     while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { ?>
      <h1><?php echo ($donnees['titre']);?>
      </h1>
      <p><?php echo  nl2br($donnees['article']);?>
      </p>
     
     <?php
     }
     $reponse->closecursor();
     
    ?>
    </article>

    
    <?php include "footer.php" ; ?>
</body>

</html>