
<?php


// Si Method du formulaire a bien été envoyé en POST
// Si Les variables existent et si elles ne sont pas vides
// on va supprimer les espaces en debut et fin de nos variables
// ... On a reussi a sauvegarder en bdd
// rediriger l'utilisateur vers la page accueil (index.php)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $name = trim($name);
        $password = trim($password);

        // INSERER 

        // header('Location:../index.php');
        // exit;
    } else {
        echo 'erreur';
    }
} else {
    // header('Location:../index.php');
    // exit;
}
