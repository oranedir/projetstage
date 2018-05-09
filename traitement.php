<?php
/**
 * Created by PhpStorm.
 * User: Orane
 * Date: 09/05/2018
 * Time: 12:05
 */

    if (($_POST["pseudo"] == "orane")&&($_POST ["mdp"] == "stage"))
    header ('location: http://www.commentcamarche.net/');
        else echo " nom d'utilisateur ou mot de passe invalide";

?>