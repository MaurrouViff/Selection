<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}


// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mailU"]) && isset($_POST["mdpU"])){
    $mailU = $_POST["mailU"];
    $mdpU = $_POST["mdpU"];
}
else
{
    $mailU = "";
    $mdpU = "";
}




$titre = "Connexion - Selection";
include ("$racine/vueConnexion.php");