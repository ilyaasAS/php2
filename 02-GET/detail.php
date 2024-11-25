<?php

// Vérification des paramètres GET
if (isset($_GET['model'], $_GET['marque'], $_GET['power'], $_GET['color'], $_GET['year_release'], $_GET['price'])) {
    // Récupérer les valeurs des paramètres GET
    $model = htmlspecialchars($_GET['model']);
    $marque = htmlspecialchars($_GET['marque']);
    $power = htmlspecialchars($_GET['power']);
    $color = htmlspecialchars($_GET['color']);
    $year_release = htmlspecialchars($_GET['year_release']);
    $price = htmlspecialchars($_GET['price']);
    
    // Calculer le nouveau prix
    $newPrice = $price * 0.8; // Réduction de 20%
} else {
    // Afficher un message d'erreur si les informations sont manquantes
    die('Informations manquantes.');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la voiture</title>
</head>
<body>
    <h1>Détails de la voiture</h1>
    <h2><?php echo "$marque $model"; ?></h2>
    <p>Puissance : <?php echo $power; ?> chevaux</p>
    <p>Couleur : <?php echo $color; ?></p>
    <p>Année de sortie : <?php echo $year_release; ?></p>
    <p>Prix original : <?php echo $price; ?> €</p>
    <p>Prix après réduction : <?php echo number_format($newPrice, 2); ?> €</p>
</body>
</html>
