<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un auteur</title>
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
    <main>
        <form action="../src/form/author-form.php" method="POST">
            <div>
                <label for="name">Nom de l'author</label>
                <input type="text" name="author" id="name">
            </div>

            <input type="submit" value="Envoyer">
        </form>
    </main>
    <footer></footer>
    <!-- Ajouter un formulaire pour creer un auteur -->

    <!-- Vous traiterez le formulaire dans le fichier author-form.php -->
    <!-- Si tout s'est bien passé vous redirigerer vers la page  -->
    <!-- Afficher des messages d'erreur -->
</body>

</html>