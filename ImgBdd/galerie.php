<?php 
include('cnx.php');
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Galerie</h1>
    <section>

<?php
    $sql = 'SELECT image FROM image';
    $req = $cnx->prepare($sql);
    $req->execute();

    while($data = $req->fetch(PDO::FETCH_ASSOC)) {

    
?>
        <img src="images/<?= $data['image']; ?>" alt="">

<?php
}
?>
    </section>



</body>
</html>