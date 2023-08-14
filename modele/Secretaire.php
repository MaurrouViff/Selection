<?php

class Secretaire extends Database {
    public function getUtilisateur() {
        $result = array();
        try {
            $req = $this->conn->prepare("SELECT * FROM Utilisateur");
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur SQL !  : ".$e->getMessage();
            die();
        }
        return $result;
    }
}