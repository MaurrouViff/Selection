<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.user.inc.php";
$inscrit = false;
$msg="";
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mailU"]) && isset($_POST["mdpU"]) && isset($_POST["pseudoU"])) {
    $mailU = $_POST["mailU"];
    $mdpU = $_POST["mdpU"];
    $pseudoU = $_POST["pseudoU"];

    // enregistrement des donnees
    $ret = addUtilisateur($mailU, $mdpU, $pseudoU);
    if ($ret) {
        $inscrit = true;
    } else {
        $msg = "l'utilisateur n'a pas été enregistré.";
    }


}
if ($inscrit) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription confirmée - Selection";
    include "$racine/vueAccueil.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription - Selection";
    include "$racine/vueInscription.php";
}
