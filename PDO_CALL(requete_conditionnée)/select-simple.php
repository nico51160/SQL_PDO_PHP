<?php
require_once('cnx.php');
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher le nom et prenom</title>
</head>
<body>

<h1>Salariés 2</h1>

<?php
try {
    $sql = 'SELECT prenom, nom FROM salarie
    WHERE salarieID = ? AND restoID = ?';
    $req = $cnx->prepare($sql);


    $req->execute(array(8,2));
    $data = $req->fetch(PDO::FETCH_ASSOC);
   
        echo $data['prenom'].' '.$data['nom'];

    //salarié 6//
    echo '<h2>salarié 6</h2>';
    $req->execute(array(2,2));
    $data = $req->fetch(PDO::FETCH_ASSOC);
        echo $data['prenom'].' '.$data['nom'];
    
} catch(PDOException $e) {
    echo 'Une erreur est survenue !';
}


?>
    
</body>
</html>