<?php

class Database {
    protected $login;
    protected $mdp;
    protected $bd;
    protected $serveur;
    protected $conn;

    public function __construct() {
        $this->login = "root";
        $this->mdp = "root";
        $this->bd = "";
        $this->serveur = "localhost";

        try {
            $this->conn = new PDO("mysql:host=$this->serveur;dbname=$this->bd;charset=UTF8", $this->login, $this->mdp);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException) {
            print "Erreur de connexion PDO";
            die();
        }
    }
}