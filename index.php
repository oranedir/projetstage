<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <form method="post" action="traitement.php">
        <h1> Se connecter         </h1>
        <label for="pseudo" > Votre identifiant: </label>
        <input type="text" name="pseudo" id="pseudo" required autofocus placeholder="prénom(orane)"/>
        <label for="mdp" > Votre mot de passe : </label>
        <input type="password" name="mdp" id="mdp" required placeholder="password(stage)"/>
      <!--   <p id="erreur">
             <?php /*
            if(isset($erreur)) {
                echo $erreur;
            } */
            ?>
        </p> -->
        <input type="submit" value="CONNEXION"/>

    </form>
</body>
</html>