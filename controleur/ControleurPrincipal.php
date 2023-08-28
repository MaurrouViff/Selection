<?php

class ControleurPrincipal {
    private $actions;

    public function __construct() {
        $this->actions = array(
            "defaut" => "accueil.php",
            "accueil" => "accueil.php",
            "connexion" => "connexion.php",
            "cgu" => "cgu.php",
            "inscription" => "inscription.php"
        );
    }

    public function execute($action) {
        if (array_key_exists($action, $this->actions)) {
            return $this->actions[$action];
        } else {
            return $this->actions["defaut"];
        }
    }
}

// Exemple d'utilisation
$controller = new ControleurPrincipal();
$action = "detail";
$page = $controller->execute($action);