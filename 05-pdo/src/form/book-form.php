<?php
session_start(); // Assurez-vous que la session est démarrée pour utiliser les messages

include '../db.php';

// Vérification si la requête est une méthode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../template/add-book.php');
    exit;
}

// Vérification des champs requis
$requiredFields = ['title', 'year', 'isbn', 'author'];

foreach ($requiredFields as $field) {
    if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
        $_SESSION['message'] = "Tous les champs sont requis.";
        header('Location: ../../template/add-book.php');
        exit;
    }
}

// Récupération des données
$title = trim($_POST['title']);
$year = (int) trim($_POST['year']);
$isbn = trim($_POST['isbn']);
$author = (int) trim($_POST['author']);

$pdo = getPDO();

// Vérification de l'existence de l'auteur

$stmt = $pdo->prepare('SELECT COUNT(*) FROM authors WHERE author_id = :author_id');

$stmt->bindParam(':author_id', $author, PDO::PARAM_INT);
$stmt->execute();
$authorExists = $stmt->fetchColumn();

if (!$authorExists) {
    $_SESSION['message'] = "L'auteur sélectionné n'existe pas.";
    header('Location: ../../template/add-book.php');
    exit;
}

// Préparation de la requête SQL
$stmt = $pdo->prepare('INSERT INTO books (title, publication_year, ISBN, author_id) VALUES (:title, :publication_year, :isbn, :author)');
$stmt->bindParam(':title', $title);
$stmt->bindParam(':publication_year', $year);
$stmt->bindParam(':isbn', $isbn);
$stmt->bindParam(':author', $author);

// Exécution de la requête
try {
    $stmt->execute();
    
    // Récupération des détails du livre ajouté
    $lastInsertId = $pdo->lastInsertId();
    $addedBook = [
        'book_id' => $lastInsertId,
        'title' => $title,
        'publication_year' => $year,
        'ISBN' => $isbn,
        'author_id' => $author
    ];
    
    echo '<pre>';
    var_dump($addedBook); // Affiche les détails du livre ajouté
    echo '</pre>';
    
    // Message de succès
    $_SESSION['message'] = "Le livre a été ajouté avec succès.";

} catch (PDOException $e) {
    $_SESSION['message'] = "Erreur lors de l'ajout du livre : " . $e->getMessage();
}

// Redirection vers la page de succès ou d'erreur
header('Location: ../../template/success.php?message=' . urlencode($_SESSION['message']));
exit;
?>
