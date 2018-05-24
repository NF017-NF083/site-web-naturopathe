<?php
    setcookie("naturopathie2","display",time()+31556926);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Cécile Gragirena vous détails ici les différents prix qu'elle pratique"
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Naturopathie - Tarifs</title>
</head>

<body>
    <a  href="index.php"><img src="img/banniere.jpg" alt="L'équilibre au naturel" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["naturopathie2"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <table>
    <?php
     include "conn_bdd.php" ;
      $reponse = $bdd->query('SELECT prestation,prix FROM tarifs WHERE categorie="naturopathie2"');

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