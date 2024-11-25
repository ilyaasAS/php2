<?php
// Inclure le fichier de connexion à la base de données
include_once '../db.php';

session_start(); // Démarrer la session

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] ==! 'POST') {
    header('Location:../template/add-login.php');
    exit;

    // Récupérer les données du formulaire
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);

    // Connexion à la base de données
    $pdo = getPDO();

    // Requête pour vérifier si l'utilisateur existe
    $stmt = $pdo->prepare('SELECT * FROM users WHERE name = :name');
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupère l'utilisateur sous forme de tableau

    if ($user) {
        // Vérifier le mot de passe
        if (password_verify($password, $user['password'])) {
            // Connexion réussie
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            echo "Connexion réussie. Bonjour " . $_SESSION['user_name'];
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Utilisateur non trouvé.";
    }
} else {
    echo "Requête non valide.";
}
