<?php
    setcookie("index","display",time()+31556926);
?>

<!doctype html>
<html>

<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/styles.css">
    
    <!--Balise pour google search console pour prouver que c'est bien nous-->
    <meta name="google-site-verification" content="HC5GwfmBaMajleBORG-x9pdlVGcECmiELkKiKyBROBA" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes">
     <title>L'équilibre au naturel</title>
    
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
    <!-- Code google analytics a mettre dans chaque page qu'on souhaite suivre-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117869108-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117869108-1');
</script>

    <?php include 'bouton_connexion.php'; ?>
    <a  href="index.php"><img src="img/banniere.jpg" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["index"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>";?>  
    
    <div class="presentation">
    <img src="img/photo.jpg">
    <?php
     try
   {
      $bdd = new PDO('mysql:host=lequilibiececile.mysql.db;dbname=lequilibiececile;charset=UTF8','lequilibiececile','AnkrGkkEqAmt1');
   }
     catch(Exception $e)
   {
        die('Erreur : '.$e->getMessage());
   }
      $reponse = $bdd->query('SELECT titre,article,categorie FROM content WHERE categorie="index"');

     while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { ?>
      <h1><?php echo $donnees['titre'];?>
      </h1>
      <p><?php echo $donnees['article'];?>
      </p>
     
     <?php
     }
     $reponse->closecursor();
     
    ?>
    </div>
    
    <?php include "footer.php" ; ?>
</body>

</html>