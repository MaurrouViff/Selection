<?php

include_once ("bd.inc.php");
class Utilisateur extends Database {
    public function getUtilisateurs() {
        $result = array();
        try {
            $req = $this->connexion->prepare("select * from user");
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $result;
    }
    public function addUtilisateur($mailU, $mdpU, $pseudoU) {
        $result = array();
        try {
            $mdpUCrypt = crypt($mdpU, "sel");
            $req = $this->connexion->prepare("insert into user (mailU, mdpU, pseudoU, rankU, libelleC) values (:mailU, :mdpU, :pseudoU, 'eleve', 'eleve par défaut')");
            $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
            $req->bindValue(':mdpU', $mdpUCrypt, PDO::PARAM_STR);
            $req->bindValue(':pseudoU', $pseudoU, PDO::PARAM_STR);
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $result;
    }
    public function getUtilisateurByMailU($mailU) {
        $result = array();
        try {
            $req = $this->connexion->prepare("select * from user where mailU=:mailU");
            $req->bindValue(':amilU', $mailU, PDO::PARAM_STR);
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $result;
    }
}
