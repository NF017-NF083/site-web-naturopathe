<?php
    setcookie("sophrologie2","display",time()+31556926);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Sophrologie - Tarifs</title>
</head>

<body>
    <a href="index.php"><img src="img/banniere.jpg" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["sophrologie2"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <table>
    <?php
     try
   {
      $bdd = new PDO('mysql:host=lequilibiececile.mysql.db;dbname=lequilibiececile;charset=UTF8','lequilibiececile','AnkrGkkEqAmt1');
   }
     catch(Exception $e)
   {
        die('Erreur : '.$e->getMessage());
   }
      $reponse = $bdd->query('SELECT prestation,prix FROM tarifs WHERE categorie="sophrologie2"');

     while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { ?>
    <tr>
    <td><?php echo $donnees['prestation']; ?></td>
    <td><?php echo $donnees['prix'].' €'; ?> </td>
    </tr>
 <?php 
     }
  $reponse->closecursor();
    ?> 
    </table>
    <?php include "footer.php"; ?>
</body>

</html>