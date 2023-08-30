<?php
include "getRacine.php";
include "$racine/controleur/ControleurPrincipal.php";
include_once "$racine/modele/bd.authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()

$controller = new ControleurPrincipal();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "defaut";
}

$fichier = $controller->execute($action);
include "$racine/controleur/$fichier";