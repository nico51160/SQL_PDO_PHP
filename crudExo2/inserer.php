<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inserer une transaction</h1>
    <form action="" method="post">
        <section>
            <input type="radio" name="achat" id="achat">
            <label for="achat">Achat</label>
            <input type="radio" name="achat" id="vente">
            <label for="vente">Vente</label>
        </section>
        <div>
            <label for="montant">Montant</label>
            <input type="number" step="any" name="montant" id="montant">
        </div>
        <div>
            <label for="dateTransaction">Date</label>
            <input type="date" nom="dateTransmition" id="dateTransmition">
        </div>
        <div>
            <select name="actionID">
                <option value="0">Choix de l'action</option>
            </select>
        </div>
        <div>
            <select name="courtierID">
                <option value="0">Choix du courtier</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Inserer">
        </div>
    </form>
</body>
</html>