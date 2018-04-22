<?php
    setcookie("sophrologie1","display",time()+31556926);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>L'équilibre au naturel</title>
</head>

<body>
    <a href="index.php"><img src="img/banniere.jpg" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["sophrologie1"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <div class="presentation">

    <?php
     try
   {
      $bdd = new PDO('mysql:host=localhost;dbname=naturopathie;charset=UTF8','root','');
   }
     catch(Exception $e)
   {
        die('Erreur : '.$e->getMessage());
   }
      $reponse = $bdd->query('SELECT titre,article,categorie FROM content WHERE categorie="sophrologie1"');

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
  
    
    <?php include "footer.php"; ?>
</body>

</html>