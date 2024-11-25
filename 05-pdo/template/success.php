<?php
session_start(); // Démarrer la session pour accéder aux messages
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succès</title>
</head>
<body>
    <h1>Message</h1>
    <p>
        <?php 
        // Affiche le message de session, ou un message par défaut
        echo $_SESSION['message'] ?? 'Aucun message disponible.'; 
        ?>
    </p>
    <?php unset($_SESSION['message']); // Supprimez le message après l'affichage ?>
    <a href="../../index.php">Retour à l'accueil</a> <!-- Lien vers la page d'accueil -->
</body>
</html>
