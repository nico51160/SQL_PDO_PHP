<?php
include('cnx.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer une image</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

<?php
    if(isset($_POST['envoyer'])) {
        $dossierTempo = $_FILES['monImage']['tmp_name'];
        $dossierSite  = 'images/'.$_FILES['monImage']['name'];

        $extention = strrchr($_FILES['monImage']['name'], '.');
        $autorise  = ['.jpg'];

        if(in_array($extention, $autorise)) {
            $deplacer     = move_uploaded_file($dossierTempo, $dossierSite);
            if($deplacer) {
    
                $sql = 'INSERT INTO image
                       (image) VALUES (:image)';
                $req = $cnx->prepare($sql);
                $retour = $req->execute(array(
                    ':image' => $_FILES['monImage']['name']
                ));
                if($retour) {
                    echo '<div class = "success">Image envoyée avec succes</div>';
                } else {
                    echo '<div class = "error">L\'image n\'a pas pu etre envoyé</div>';
                }
                
            } else {
                echo 'Une erreur est survenue';
            }
        } else {
            echo 'Extention non autorisé';
        }




    }
?>


        <label for="upload">Envoyer une image</label>
        <input type="file" name="monImage" id="upload">
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
</body>
</html>