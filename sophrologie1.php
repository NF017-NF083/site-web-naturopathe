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

    <h1>Comment se déroule une séance ?</h1>
   
   <p>Une séance de sophrologie dure 1 heure et se déroule suivant plusieurs phases :<br>
​   <span>Temps d'échange :</span> à votre écoute pour définir ensemble vos attentes et vos besoins, 
   votre sophrologue pourra alors déterminer l'orientation de sa pratique pour un 
   accompagnement adapté et vous informer du nombre de séances nécessaires.<br>
​   <span>Relaxation dynamique : </span>mouvements simples et doux synchronisés sur la respiration 
   avec concentration sur vos ressentis corporels<br>
   <span>Relâchement musculaire : </span>exercices statiques pour une détente mentale et corporelle<br>
   <span>Visualisation positive :</span> permet de revisiter son passé pour y puiser
   des ressources qui sont parfois bien cachées, d'enrichir son futur de tous 
   les possibles, de récolter les messages émanant de votre monde intérieur, ...<br>
   <span>Dialogue post-sophronique : </span>temps d'expression des ressentis de la séance.</p>
​
​​   <p>Pendant toute la durée de la séance, vous restez conscients, 
   vous êtes simplement dans un état de vigilance abaissée, ce qui vous permet 
   d'être plus réceptifs aux exercices.</p>

   <p>Les exercices pratiqués lors des séances peuvent être réinvestis dans votre quotidien
    et vous sont une aide durable pour tous les moments de la vie. C'est la pratique
    régulière qui permet un résultat durable et efficace !</p>

   <p>La sophrologie se pratique en position debout, assise ou allongée.
   Aucune tenue particulière n'est nécéssaire : soyez à l'aise !</p>
    </div>
  
    
    <?php include "footer.php"; ?>
</body>

</html>