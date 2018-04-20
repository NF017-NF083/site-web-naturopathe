<?php
    setcookie("index","display",time()+31556926);
?>

<!doctype html>
<html>

<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/styles.css">
+    
+    <!--Balise pour google search console pour prouver que c'est bien nous-->
+    <meta name="google-site-verification" content="HC5GwfmBaMajleBORG-x9pdlVGcECmiELkKiKyBROBA" />
+    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes">
     <title>L'équilibre au naturel</title>
+    
+    <!-- Code google analytics a mettre dans chaque page qu'on souhaite suivre-->
+<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117869108-1"></script>
+<script>
+  window.dataLayer = window.dataLayer || [];
+  function gtag(){dataLayer.push(arguments);}
+  gtag('js', new Date());
+
+  gtag('config', 'UA-117869108-1');
+</script>
 </head>

<body>

    <?php include 'bouton_connexion.php'; ?>
    <a  href="index.php"><img src="img/banniere.jpg" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["index"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>";?>  
      
    <div class="presentation">
    <img src="img/photo.jpg">
    <h1>Cécile Gragirena</h1>
    <p>Diplômée de l’IFSH, en naturopathie, conseil en
nutrition et réfléxologie plantaire, j’ai souhaité
compléter ma formation par un diplôme de
Sophrologue, obtenu à l’Ecole de Sophrologie et
Somatothérapie Appliquées de Tours.
Je vous accompagnerai en globalité, tant sur le plan
physiologique que psychique, Corps et Esprit étant
indissociables.
Que vous souhaitiez modifier vos habitudes de vie,
perdre du poids, mieux gérer votre stress ou être suivi
pour une pathologie particulière, n’hésitez pas à me
contacter.</p>
    </div>
    
    <?php include "footer.php" ; ?>
</body>

</html>