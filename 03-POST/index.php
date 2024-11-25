<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découverte de la superglobale POST</title>
</head>

<body>
    <form action="./src/traitement-formulaire.php" method="POST">
        <div>
            <label for="name">Nom</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>