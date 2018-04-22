<?php
    setcookie("sophrologie2","display",time()+31556926);
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
    <?php if(!isset($_COOKIE["sophrologie2"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <table>
    <?php
     try
   {
      $bdd = new PDO('mysql:host=localhost;dbname=naturopathie;charset=UTF8','root','');
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