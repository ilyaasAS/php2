<?php

include_once '../db.php';

session_start(); // Démarrer la session pour utiliser les messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['author']) && !empty(trim($_POST['author']))) {
        $author = trim($_POST['author']);

        $pdo = getPDO();
        
        // Préparer la requête d'insertion
        $stmt = $pdo->prepare('INSERT INTO authors (author_name) VALUES (:author_name)');
        $stmt->bindParam(':author_name', $author);

        // Exécution de la requête
        try {
            $stmt->execute();
            $_SESSION['message'] = 'Un nouvel auteur a bien été ajouté.';
            header('Location: ../../index.php'); // Redirection vers la page d'accueil
            exit;
        } catch (PDOException $e) {
            $_SESSION['message'] = 'Erreur lors de l\'ajout de l\'auteur : ' . $e->getMessage();
            header('Location: ../../template/add-author.php'); // Redirection vers la page d'ajout d'auteur en cas d'erreur
            exit;
        }
    } else {
        $_SESSION['message'] = 'Le nom de l\'auteur ne peut pas être vide.';
        header('Location: ../../template/add-author.php'); // Redirection si le champ est vide
        exit;
    }
} else {
    header('Location: ../../template/add-author.php'); // Redirection si la méthode n'est pas POST
    exit;
}
