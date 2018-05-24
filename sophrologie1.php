<?php
    setcookie("sophrologie1","display",time()+31556926);
?>
    <!doctype html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="Description" content="Cécile Gragirena vous explique la séance de sophrologie." />
        <link rel="stylesheet" href="css/styles.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title>L'équilibre au naturel - La sophrologie</title>
    </head>

    <body>
        <a href="index.php"><img src="img/banniere.jpg" alt="L'équilibre au naturel" height="250px" ></a>
        <?php include "menu.php"; ?>
        <?php if(!isset($_COOKIE["sophrologie1"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
        <article class="presentation">

            <?php
    include "conn_bdd.php" ;
      $reponse = $bdd->query('SELECT titre,article,categorie FROM content WHERE categorie="sophrologie1"');

     while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
     { ?>
                <h1>
                    <?php echo htmlspecialchars($donnees['titre']);?>
                </h1>
                <p>
                    <?php echo nl2br(htmlspecialchars($donnees['article']));?>
                </p>

                <?php
     }
     $reponse->closecursor();
     
    ?>
        </article>


        <?php include "footer.php"; ?>
    </body>

    </html>
