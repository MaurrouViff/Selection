<?php
include_once ("bd.user.inc.php");
$utilisateur = new Utilisateur();
class Authentification {
    private $mailU;
    private $mdpU;

    public function __construct($mailU, $mdpU) {
        $this->mailU=$mailU;
        $this->mdpU=$mdpU;
    }
     public function login() {
        global $utilisateur;
        if (!isset($_SESSION)) {
            session_start();
        }
        $util = $utilisateur->getUtilisateurByMailU($this->mailU);
        if ($util) {
            $mdpBD = $util["mdpU"];
        } else {
            $mdpBD = "false";
        }
        if (trim($mdpBD) == trim(crypt($this->mdpU, $mdpBD))) {
            $_SESSION["mailU"] = $this->mailU;
            $_SESSION["mdpU"] = $mdpBD;
        }
    }
}
     function logout() {
        if (!isset($_SESSION)) {
            session_start();
        }
        unset($_SESSION["mailU"]);
        unset($_SESSION["mdpU"]);
    }
     function isLoggedOn() {
        global $utilisateur;
        if (!isset($_SESSION)) {
            session_start();
        }
        $ret = false;

        if (isset($_SESSION["mailU"])) {
            $util = $utilisateur->getUtilisateurByMailU(($_SESSION["mailU"]));
            if ($util["mailU"] == $_SESSION["mailU"] && $util["mdpU"] == $_SESSION["mdpU"]) {
                $ret = true;
            }
     }
        return $ret;
}
    function getMailUloggedOn() {
    if (isLoggedOn()) {
        $ret = $_SESSION["mailU"];
    } else {
        $ret = "";

    }
    return $ret;
    }
