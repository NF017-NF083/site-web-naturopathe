<a href="connexion.php" id="deconnexion"><?php session_destroy(); echo'Déconnexion'; ?></a><br>
<p id="login"><?php echo $_SESSION['login']; ?></p>