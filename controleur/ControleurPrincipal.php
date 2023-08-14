<?php

class ControleurPrincipal {
    private $actions;

    public function __construct() {
        $this->actions = array(
            "defaut" => "vueAccueil.php",
            "accueil" => "vueAccueil.php"
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