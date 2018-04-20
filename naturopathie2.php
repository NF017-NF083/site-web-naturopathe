<?php
    setcookie("naturopathie2","display",time()+31556926);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>L'équilibre au naturel</title>
</head>

<body>
    <a  href="index.php"><img src="img/banniere.jpg" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["naturopathie2"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <table>
    <tr>
    <td>Bilan de vitalité ( 2h )</td>
    <td>70 €</td>
    </tr>
    
    <tr>
    <td>RDV de suivi ( 1h )</td>
    <td>40 €</td>
    </tr>
    
    <tr>
    <td>Conseil en aromathérapie et phytothérapie ( 1h )</td>
    <td>40 €</td>
    </tr>
    
    <tr>
    <td>Conseil en nutrition et réforme alimentaire ( 2h )</td>
    <td>65 €</td>
    </tr>
    <table>
  
    
    <?php include "footer.php"; ?>
</body>

</html>