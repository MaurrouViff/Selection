<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once ("$racine/modele/bd.authentification.inc.php");

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mailU"]) && isset($_POST["mdpU"])){
    $mailU = $_POST["mailU"];
    $mdpU = $_POST["mdpU"];
} else {
    $mailU = "";
    $mdpU = "";
}

login($mailU,$mdpU);


if (isLoggedOn()) {
    include "$racine/controleur/monProfil.php";
} else {
    $titre = "Connexion - Selection";
    include ("$racine/vueConnexion.php");
}

