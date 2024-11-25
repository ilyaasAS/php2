<?php
function getPDO()
{
    try {
        // Remplace 'library' par le nom de ta base de données
        $pdo = new PDO('mysql:host=localhost;dbname=library', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $pdo;
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
        exit();
    }
}
?>
