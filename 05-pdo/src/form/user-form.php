<?php
// Inclure le fichier de connexion à la base de données
include_once '../db.php'; // Chemin correct pour db.php

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer les données du formulaire
    $name = trim($_POST['name']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Hasher le mot de passe

    // Vérifier que les champs requis ne sont pas vides
    if (!empty($name) && !empty($password)) {
        // Connexion à la base de données
        $pdo = getPDO();

        // Préparation de la requête SQL pour insérer un utilisateur
        $stmt = $pdo->prepare('INSERT INTO users (name, password) VALUES (:name, :password)');
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $password);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "L'utilisateur a été ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout de l'utilisateur.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
}
?>
