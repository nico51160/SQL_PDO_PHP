<?php
class Client {
    private $clientID;
    private $prenom;
    private $nom;
    private $email;

    public function setClientID($_clientID) {
        $this->clientID = $_clientID;
    }
    public function setPrenom($_prenom) {
        $this->prenom = $_prenom;
    }
    public function setNom($_nom) {
        $this->nom = $_nom;
    }
    public function setEmail($_email) {
        $this->email = $_email;
    }

    public function getClientID() {
        return $this->clientID;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getEmail() {
        return $this->email;
    }
}