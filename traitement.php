<?php
/**
 * Created by PhpStorm.
 * User: Orane
 * Date: 09/05/2018
 * Time: 12:05
 */
$erreur = " <p style='color:red; font-style: italic;font-size: small; text-align: center;'> nom d'utilisateur et mot de passe invalide </p>";
$nom = $_POST ["pseudo"];
    if (($_POST["pseudo"] == "orane")&&($_POST ["mdp"] == "stage")) {
        require __DIR__ . "/accueil.php";
        /*header ('location: http://www.commentcamarche.net/');*/
    }
    elseif (($_POST["pseudo"]== "orane") && ($_POST ["mdp"] !== "stage" )) {
        require __DIR__ . "/index.php";
        echo "<p style='color:red; font-style: italic;font-size: small; text-align: center;'> mot de passe incorrect </p>"; }
    else {
        require __DIR__ . "/index.php";
        echo $erreur;
    }
?>