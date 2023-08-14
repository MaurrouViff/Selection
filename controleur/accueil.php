<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}


$titre = "Accueil - Selection";
include ("$racine/vue/vueAccueil.html");