<?php
    setcookie("naturopathie1","display",time()+31556926);
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
    <?php if(!isset($_COOKIE["naturopathie1"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <div class="presentation">
    
    <h1>Déroulement d'une consultation</h1>
    <p>La consultation en naturopathie permet de dresser un bilan de votre vitalité le jour de la visite.<br>
    La consultation se poursuit sur la proposition d'un programme d'hygiène vitale (PHV) personnalisé, 
    adapté à votre profil et à vos antécédents de santé.
    Ce programme contient les conseils et recommandations pour mener à bien la cure naturopathique proposée.</p>
    </div>
    
    
    <?php include "footer.php"; ?>
</body>

</html>