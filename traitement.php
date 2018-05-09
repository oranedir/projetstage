<?php
/**
 * Created by PhpStorm.
 * User: Orane
 * Date: 09/05/2018
 * Time: 12:05
 */
$erreur = "nom d'utilisateur ou mot de passe invalide";
$nom = $_POST ["pseudo"];
    if (($_POST["pseudo"] == "orane")&&($_POST ["mdp"] == "stage")) echo "Bienvenue $nom !";
    /*header ('location: http://www.commentcamarche.net/');*/


    else {
        require __DIR__ . "/index.php";
    }

?>