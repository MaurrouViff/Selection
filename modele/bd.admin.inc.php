<?php

include_once ("bd.inc.php");
class Admin extends Database {
    public function getAdmin() {
        $result = array();
        try {
            $req = $this->connexion->prepare("select * from user WHERE rankU = 'admin'");
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $result;
    }

}