<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>mailing</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <fieldset>
            <legend>Recevez nos news</legend>
               

                <div>
                    <label for="email">Votre Email</label>
                    <input type="email" name="email" id="email" placeholder="votre email">




                </div>

                <div>
                    <label for="captcha">copier le code</label>
                    <img src="captcha.php" alt="code captcha">
                    <input type="text" name="captcha" id="captcha" placeholder="copier le code">


                </div>

                <input type="submit" value="S'inscrire">




        </fieldset>

    </form>
</body>
</html>