<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form method="post" action="traitement.php">
        <p>
            <label for="pseudo" > Votre pseudo: </label>
            <input type="text" name="pseudo" id="pseudo" required autofocus/>
            <label for="mdp" > Votre mot de passe : </label>
            <input type="password" name="mdp" id="mdp" required/>
            <input type="submit" value="Envoyer"/>
        </p>
        <?php
           if(isset($erreur)) {
               echo $erreur;
           }
        ?>
    </form>
</body>
</html>