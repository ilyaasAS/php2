<?php
// Vérification de l'ID du livre depuis l'URL, avec validation
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $book_id = (int) $_GET['id']; // Conversion de l'id en entier
} else {
    // Message d'erreur si l'id est invalide
    die('Identifiant invalide.');
}

include_once '../src/db.php'; // Assurez-vous que ce chemin est correct

try {
    // Connexion à la base de données
    $pdo = getPDO();

    // Préparation de la requête SQL sécurisée avec le bon nom de colonne 'book_id'
    $stmt = $pdo->prepare('SELECT * FROM books WHERE book_id = :book_id');
    $stmt->bindParam(':book_id', $book_id, PDO::PARAM_INT); // S'assurer que l'ID est bien un entier
    $stmt->execute();

    // Récupération du livre correspondant
    $book = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$book) {
        // Si aucun livre n'est trouvé, on affiche un message
        die('Livre non trouvé.');
    }
} catch (PDOException $e) {
    // Gestion des erreurs PDO
    die('Erreur lors de la connexion à la base de données : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du livre</title>
</head>

<body>
    <header>
        <nav>
            <a href="">Ajouter un auteur</a>
        </nav>
    </header>
    
    <!-- Affichage des détails du livre -->
    <h1><?= htmlspecialchars($book['title']); ?></h1>
    <p>Année de publication : <?= htmlspecialchars($book['publication_year']); ?></p>
    <p>ISBN : <?= htmlspecialchars($book['ISBN']); ?></p>

</body>

</html>
