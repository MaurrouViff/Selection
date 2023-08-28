<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}


// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["pseudoU"]) && isset($_POST["mdpU"])){
    $pseudoU=$_POST["pseudoU"];
    $mdpU=$_POST["mdpU"];
}
else
{
    $pseudoU="";
    $mdpU="";
}




$titre = "Connexion - Selection";
include ("$racine/vueConnexion.php");