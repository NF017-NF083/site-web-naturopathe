<?php
    setcookie("sophrologie","display",time()+31556926);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>L'équilibre au naturel - La Sophrologie</title>
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

    <a  href="index.php"><img src="img/banniere.jpg" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["sophrologie"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    
    <div class="presentation">
    <img src="img/sophrologie.jpg" alt="Sophrologie" width="300px">
    <?php
     try
   {
      $bdd = new PDO('mysql:host=lequilibiececile.mysql.db;dbname=lequilibiececile;charset=UTF8','lequilibiececile','AnkrGkkEqAmt1');
   }
     catch(Exception $e)
   {
        die('Erreur : '.$e->getMessage());
   }
      $reponse = $bdd->query('SELECT titre,article,categorie FROM content WHERE categorie="sophrologie"');

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
    </div>
    
    <div class="categories">
    <div class="cat"><a  href="sophrologie1.php" >Scéances de sophologie</a></div>
    <div class="cat"><a  href="sophrologie2.php">Tarifs</a></div>
    </div>
    
    <?php include "footer.php"; ?>
</body>

</html>