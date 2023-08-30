<?php

include_once ("bd.inc.php");
function getUtilisateurs() {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from user");
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUtilisateurByMailU($mailU) {
    $resultat = array();
    try {

        $cnx = connexionPDO();

        $req = $cnx->prepare("select * from user where mailU=:mailU");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($mailU, $mdpU, $pseudoU) {
    try {
        $cnx = connexionPDO();
        $mdpUCrypt = crypt($mdpU, "sel");
        $req = $cnx->prepare("insert into user (mailU, passwordU, pseudoU, rankU, libelleC) values (:mailU, :passwordU, :pseudoU, 'eleve', 'eleve par défaut')");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->bindValue(':passwordU', $mdpUCrypt, PDO::PARAM_STR);
        $req->bindValue(':pseudoU', $pseudoU, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
