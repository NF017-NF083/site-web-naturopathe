<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/styles.css">
        <title>Connexion au BackOffice</title>

    </head>
    <body>
   <a href="logout.php" id="deconnexion">Déconnexion</a><br>
    <p id="login"><?php if (isset($_SESSION['login']))echo $_SESSION['login']; ?></p>
        <h1>Administrer mon site</h1>
        <a class="liens" href="message.php">Consulter mes messages</a>
        
        
    </body>
</html>