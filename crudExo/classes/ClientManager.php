<?php
include('traits/Manager.php');
class ClientManager {
    use Manager;
    
    //**Creer Client */
    public function CreateClient(Client $_client) {
        if( empty($_client->getPrenom()) || empty($_client->getNom()) || empty($_client->getEmail())) {
            echo '<p>Merci de remplir tous les champs</p>';
        } else {
            $sql = 'INSERT INTO client
                    (prenom, nom, email) VALUES
                    (:prenom, :nom, :email)';
            $req = $this->cnx->prepare($sql);
            $result = $req->execute(array(
                    ':prenom' => $_client->getPrenom(),
                    ':nom'    => $_client->getNom(),
                    ':email'  => $_client->getEmail()
            ));
            if($result) {
                echo '<p>Le nouveau client a bien été inséré</p>';
            } else {
                echo '<p>Une erreur est survenue</p>';
            }
        }
    }
    //**Creer Client */


    //**Afficher Client */
    public function ReadClient($_client) {
        $sql = 'SELECT * FROM client
                WHERE clientID = :clientID';
        $req = $this->cnx->prepare($sql);
        $req->execute(array(
            ':clientID' => $_client = $_client
        ));
        $datas = $req->fetch(PDO::FETCH_ASSOC);

        $client = new Client();
        foreach($datas as $cle => $valeur) {
            $setter = 'set'.ucfirst($cle);
            if(method_exists($client, $setter)) {
                $client->$setter($valeur); 
            }
        }
        return $client;
        
    }
    //**Afficher Client */

    //**Afficher la liste des Clients */
    public function ReadAllClient() {
        $sql = 'SELECT * FROM client';
        $req = $this->cnx->prepare($sql);
        $req->execute();

        while($datas = $req->fetch(PDO::FETCH_ASSOC)) {
            $client = new Client();
            foreach($datas as $cle => $valeur) {
                $setter = 'set'.ucfirst($cle);
                if(method_exists($client, $setter)) {
                    $client->$setter($valeur); 
                }
            }
            $clients[] = $client;
        }
        if(!empty($client)) {
            return $clients;
        }
    }
    //**Afficher la liste des Clients */

    //**Modifier les Clients */
    public function UpdateClient(Client $_client) {
        $sql = 'UPDATE client SET
        prenom = :prenom, nom = :nom, email = :email
        WHERE clientID = clientID';
        $req = $this->cnx->prepare($sql);
        $req->execute(array(
                        ':prenom'      => $_client->getPrenom(),
                        ':nom'         => $_client->getnom(),
                        ':email'       => $_client->getEmail(),
                        ':clientID'    => $_client->getClientID()
        ));

    }
    //**Modifier les Clients */

    //**Supprimer Clients */
    public function Delete(Client $_client) {
        $sql = 'DELETE FROM client
        WHERE clientID = :clientID';
        $this->cnx->prepare($sql);
        $req->execute(array(
                        ':clientID' => $_client->getClientID()

        ));
    }
    //**Supprimer Clients */



}