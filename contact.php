<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>L'équilibre au naturel</title>
</head>

<body>
    <a  href="index.php"><img src="img/banniere.JPG" height="250px" ></a>
    <?php include "menu.php"; ?>
    
    <div class="presentation">
    
    <h1>Contactez-moi</h1>
    
    <form action="action_page.php">
    <label for "nom">Nom</label>
    <input type="text" name="nom" autofocus><br>
    <label for "prenom">Prénom</label>
    <input type="text" name="prenom"><br>
    <label for "mail">E-mail</label>
    <input type="email" name="mail"><br>
    <label for "message">Votre message</label>
    <textarea name="message" rows=10 cols=50></textarea><br>
    
  <div class="bouton"><input type="submit" value="Envoyer"></div>
  </form>
    
    <h1>Infos pratiques</h1>
    <p>Cécile GRAGIRENA<br>
<span>Adresse :</span> 30 Rue Neuve , 45750 ST-PRYVÉ ST-MESMIN<br>
<span>E-Mail :</span><a class="contact" href="mailto:cecile.gragirena@yahoo.fr">cecile.gragirena@yahoo.fr</a> <br>
<span>Portable :</span><a class="contact" href="tel:0615448892"> 06 15 44 88 92</a> sur rendez-vous
</p>
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2675.6171755815485!2d1.8665395153693098!3d47.88573867664679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4e569c89f5ea5%3A0xe083fe6d12a272f5!2s30+Rue+Neuve%2C+45750+Saint-Pryv%C3%A9-Saint-Mesmin!5e0!3m2!1sen!2sfr!4v1523088488765" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
    
    <?php include "footer.php"; ?>
</body>

</html>