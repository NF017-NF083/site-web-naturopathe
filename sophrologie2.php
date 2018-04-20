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
    <tr>
    <td>RDV 1ère consultation (1h30)</td>
    <td>60 €</td>
    </tr>
    
    <tr>
    <td>RDV de suivi (1h15)</td>
    <td>50 €</td>
    </tr>
    
    <tr>
    <td>Cours collectifs Adultes 1 h(mercredi matin) sur la base de 3 personnes</td>
    <td>18 €</td>
    </tr>
    
    <tr>
    <td>Cours collectifs Enfants 1h(Samedi matin) sur la base de 3 enfants</td>
    <td>16 €</td>
    </tr>
    <table>
  
    
    <?php include "footer.php"; ?>
</body>

</html>