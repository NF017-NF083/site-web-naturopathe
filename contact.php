<?php
    setcookie("contact","display",time()+31556926);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Contact</title>
</head>

<body>
    <a  href="index.php"><img src="img/banniere.jpg" alt="L'équilibre au naturel" height="250px" ></a>
    <?php include "menu.php"; ?>
    <?php if(!isset($_COOKIE["contact"])) echo "<div id=\"bienvenue\">Bienvenue</div>"."<br>"; ?>
    <article class="presentation">
    
    <h1>Contactez-moi</h1>
    
    <form method="POST" action="reception.php" name="formulaire">
    <label for "nom" >Nom et prénom</label>
    <input type="text" name="nom" autofocus required /><br>
    <label for "tel">Téléphone</label>
    <input type="tel" name="tel"/><br>
    <label for "mail">E-mail</label>
    <input type="email" name="mail" required /><br>
    Sujet du message<br>

    <input type="radio" id="demContact" name="sujet" value="Demande de Contact" checked />
    <label for "demContact" style="display:inline; float:none;">Demande de contact</label><br>
    <input type="radio" id="demInformation" name="sujet" value="Demande d'information" />
    <label for "demInformation" style="display:inline; float:none;">Demande d'information</label><br>
    <input type="radio" id="suggAmelioration" name="sujet" value="Suggestion d'amelioration" />
    <label for "suggAmelioration" style="display:inline; float:none;">Suggestion d'amélioration</label><br>
    
    
    <label for "message">Votre message</label>
    <textarea name="message" rows=10 cols=50 required></textarea><br>
    
    <div class="boutons">
    <input type="submit" name="send" value="Envoyer" />
    <input type="reset" name="reset" value=" Annuler " />
    </div>
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
    </article>
    <!-- Script pour facebook like box -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/cecilegragirena/" data-tabs="timeline" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/cecilegragirena/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cecilegragirena/">Léquilibreaunaturel</a></blockquote></div>
    <br>
    <a href="http://www.nosnaturopathes.com">Trouvez les meilleurs naturopathes avec les avis clients sur NosNaturopathes.com</a>
    <?php include "footer.php"; ?>
</body>

</html>