<?php
    setcookie("sophrologie","display",time()+31556926);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>L'équilibre au naturel</title>
</head>

<body>
-    <!-- Code google analytics a mettre dans chaque page qu'on souhaite suivre-->
-<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117869108-1"></script>
-<script>
-  window.dataLayer = window.dataLayer || [];
-  function gtag(){dataLayer.push(arguments);}
-  gtag('js', new Date());
-
-  gtag('config', 'UA-117869108-1');
-</script>

    <a  href="index.php"><img src="img/banniere.jpg" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["sophrologie"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <div class="presentation">
    <img src="img/sophrologie.jpg" width="300px">
    <h1>Sophrologie caycédienne</h1>
    <p>La sophrologie utilise des techniques de relaxation
statiques ou dynamiques, permettant le lâcher prise,
en vue de développer ses ressources au quotidien pour
mieux gérer son stress et prendre confiance en soi.
Ces techniques de développement personnel,
pratiquées régulièrement, améliorent concrètement la
qualité de vie.
Avez-vous déjà imaginé, vous lever heureux chaque
matin, détendu, content d’être là à faire ce que vous
faites, tout en étant en harmonie avec vous-même, les
autres et votre environnement ?
La sophrologie vous offre la clé de la liberté !
Peurs, angoisses, énurésie de l’enfant, manque de
confiance en soi, manque d’estime de soi, névroses,
dépression ou autres pathologies...</p>
    </div>
    
    <div class="categories">
    <div class="cat"><a  href="sophrologie1.php" >Scéances de sophologie</a></div>
    <div class="cat"><a  href="sophrologie2.php">Tarifs</a></div>
    </div>
    
    <?php include "footer.php"; ?>
</body>

</html>