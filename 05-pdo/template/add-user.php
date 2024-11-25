<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Utilisateur</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/form.css">

</head>
<body>
<header>
        <a href="../index.php">Accueil</a>
        <nav>
        <a href="add-author.php">ajouter un auteur</a>
            <a href="add-book.php">ajouter un livre</a>
            <a href="add-user.php">Connexion</a>
            <a href="add-login.php">Inscription</a>
        </nav>
    </header>
    <h1>Ajouter un nouvel utilisateur</h1>
    
    <form action="../src/form/user-form.php" method="POST"> 
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <button type="submit">Ajouter l'utilisateur</button>
        </div>
    </form>

</body>
</html>
