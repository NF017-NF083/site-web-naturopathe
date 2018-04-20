<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/styles.css">
        <title>Connexion au BackOffice</title>

    </head>
    <body>
        <a  href="index.php"><img src="img/banniere.jpg" height="250px" ></a>
        <p>Veuillez entrer votre login et votre mot de passe</p>
        <form action="login.php" method="post" name="connexion">
            <p>
            <label for "login" >Login</label><br>
            <input type="text" name="login" autofocus required ><br>
            <label for "mdp" >Mot de passe</label><br>
            <input type="password" name="mdp"  required ><br>
            <input type="submit" value="Valider" />
            </p>
        </form>
    </body>
</html>