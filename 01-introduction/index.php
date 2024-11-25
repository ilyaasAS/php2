<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Découverte de PHP</h1>
    <?php
    // Pour ouvrir un bloc PHP, on utilise la balise <?php
    // Pour fermer un bloc PHP on utilise la balise suivante :
    ?>

    <p>Je suis du HTML</p>

    <?php
    /* --------------------------------- */
    echo '<h2>Les commentaires</h2>';
    /* --------------------------------- */

    // Je suis un commentaire en PHP
    # Je suis aussi un commentaire en PHP
    /*
        Je suis un commentaire
        sur plusieurs lignes
    */


    /* --------------------------------- */
    echo '<h2>Affichage</h2>';
    /* --------------------------------- */

    //  echo est une instruction qui permet d'afficher du texte dans le navigateur
    echo 'Hello, world !';
    //  print est équivalent à echo
    print "Hello, World !";


    /* --------------------------------- */
    echo '<h2>Les variables</h2>';
    /* --------------------------------- */

    // Déclaration d'une variable avec le signe $
    $unNom;
    // Affectation d'une valeur à la variable
    $unNom = 127;
    // Affichage de la variable
    echo $unNom;
    echo '<br>';


    /* --------------------------------- */
    echo '<h2>Les types de variables</h2>';
    /* --------------------------------- */

    // Les types de variables :

    // String : chaine de caractères (texte)
    $unMessage = 'Salut, l\'equipe. Je suis un message dans une variable';
    echo gettype($unMessage) . '<br>';

    // Integer : entier (nombre sans virgule)
    $unNombreEntier = 123;
    echo gettype($unNombreEntier) . '<br>';

    // Float : nombre à virgule (-3.14, 0.0, 1.2, 3.14)
    $unNombreAVirgule = 23.6;
    echo gettype($unNombreAVirgule) . '<br>';

    // Boolean : true ou false
    $unBooleen = true;
    echo $unBooleen . ' <br>';

    $unBooleen = false;
    echo $unBooleen . '<br>';

    echo gettype($unBooleen) . '<br>';

    // NULL : absence de valeur
    $uneVariable = null;
    echo gettype($uneVariable) . '<br>';
    echo $uneVariable . '<br>';


    /* --------------------------------- */
    echo '<h2>La concaténation</h2>';
    /* --------------------------------- */

    // La concaténation permet d'assembler des chaines de caractères avec des variables
    $a = 'Bonjour';
    $b = 'tout le monde';
    echo $a . ' ' . $b . ', je suis en cours de PHP' . '<br>';

    // Entre guillemets simple les variables ne sont pas évaluées : c'est leur nom littéral qui est affiché
    echo '$a $b, je suis un message en PHP' . '<br>';

    // Entre guillemets doubles, les variables sont évaluées : c'est leur contenu qui est affiché
    echo "$a $b, je suis un message en PHP" . '<br>';

    // Entre guillemets doubles, on peut mettre des accolades autour des variables pour les séparer du reste de la chaine de caractères
    echo "{$a} {$b}, je suis un message en PHP" . '<br>';


    // Déclarer 3 variables contenant : bleu, blanc, rouge
    // Afficher bleu-blanc-rouge (avec les tirets) en mettant le texte de chaque couleur dans des variables.
    $blue  = 'Bleu';
    $white = 'Blanc';
    $red   = 'Rouge';

    echo $blue . '-' . $white . '-' . $red . '<br>';
    echo "$blue-$white-$red <br>";
    echo "{$blue}-{$white}-{$red} <br>";
    echo '$blue-$white-$red';


    /* --------------------------------- */
    echo '<h2>Les constantes et les constantes magiques</h2>';
    /* --------------------------------- */

    // Une constante permet de sauvegarder une valeur sauf que celle-ci ne peut pas être modifiée
    // Utile pour conserver les parametres de la base de donnée
    // Par convention, une constante se déclare toujours en majuscule
    define("CAPITAL", "Paris");
    const PAYS = 'France';
    echo CAPITAL;
    echo '<br>';
    echo PAYS;
    echo '<br>';

    // Les constantes predefinies :
    echo 'Version de PHP : ' . PHP_VERSION . '<br>'; // Affiche la version de PHP
    echo 'Système d\'exploitation du serveur : ' . PHP_OS . '<br>'; // Affiche le système d'exploitation du serveur


    /* --------------------------------- */
    echo '<h3>Les constantes magiques</h3>';
    /* --------------------------------- */
    // Les constantes magiques sont des constantes prédéfinies dans le langage qui changent de valeur en fonction du contexte
    echo 'Chemin du fichier courant : ' . __FILE__ . '<br>'; // Affiche le chemin complet vers le fichier courant
    echo 'Numero de la ligne de code : ' . __LINE__ . '<br>'; // Affiche le numéro de la ligne courante
    echo 'Dossier courant : ' . __DIR__ . '<br>'; // Affiche le dossier dans lequel est le fichier courant


    /* --------------------------------- */
    echo '<h2>Les tableaux</h2>';
    /* --------------------------------- */

    /* --------------------------------- */
    echo '<h3>Les tableaux à indice</h3>';
    /* --------------------------------- */

    // Un tableau de données ARRAY est déclaré comme une variable améliorée dans laquelle on stocke une multitude de valeurs.
    // Ces valeurs peuvent être de n'importe quel type et possèdent un indice par défaut dont la numérotation commence à 0.

    $country = ['France', 'Italie', 'Espagne', 'Portugal'];
    $country = array('France', 'Italie', 'Espagne', 'Portugal');

    echo gettype($country) . '<br>';

    echo '<pre>';
    var_dump($country);
    echo '</pre>';

    echo '<pre>';
    print_r($country);
    echo '</pre>';

    // Afficher le premier element de $tableau
    echo $country[0];

    /* --------------------------------- */
    echo '<h3>Les tableaux associatifs</h3>';
    /* --------------------------------- */

    $tableau2 = ['nom' => 'rachid', 'prenom' => 'edjek'];
    echo $tableau2['nom'] . '<br>';

    $user = ['firstName' => 'rachid', 'lastName' => 'edjekouane', 'age' => 41, 'phone' => '0165878974'];

    echo "Bonjour, je m'appelle {$user['firstName']} {$user['lastName']}, j'ai {$user['age']} ans et mon numéro de téléphone est le : {$user['phone']} <br>";

    $animals = ['chien', 'chat', 'lapin', 'poule', 'aigle'];

    /* --------------------------------- */
    echo '<h3>La fonction implode()</h3>';
    /* --------------------------------- */

    // implode() permet de transformer un tableau en chaine de caractères.
    echo 'Mes animaux préférés sont : ' . implode(', ', $animals) . '<br>';

    /* --------------------------------- */
    echo '<h2>Les operateurs</h2>';
    /* --------------------------------- */

    // Les opérateurs de concaténation (.)
    // Les opérateurs arithmétiques (+, -, *, /, %, **)
    // Les opérateurs d'affectation (=, +=, -=, *=, /=, %=, **=)
    // Les opérateurs de comparaison (==, ===, !=, !==, <, >, <=, >=)
    // Les opérateurs logiques (&&, ||, !, and, or, xor)
    // Les opérateurs d'incrémentation et de décrémentation (++, --)

    // Les opérateurs de strucutre (if, else, elseif, switch, case, default, for, foreach, while, do while, break, continue, return, include, require, include_once, require_once)
    // Les structures conditionnelles (if / elseif/ else)
    // Les structures itératives : les boucles (while, for, foreach, do while)
    // Les structures de langage (break, continue, return, include, require, include_once, require_once)

    /* --------------------------------- */
    echo '<h3>Les opérateurs arithmétiques</h3>';
    /* --------------------------------- */

    $a = 10;
    $b = 2;
    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br>'; // modulo = reste de la division entière
    $a++;
    echo $a . '<br>';
    $a = $a + 1;
    echo $a . '<br>';
    $a += 2;
    echo $a . '<br>';
    $a *= 2;
    echo $a . '<br>';
    $a %= 2;
    echo $a . '<br>';


    /* --------------------------------- */
    echo '<h2>Les structures itératives : les boucles</h2>';
    /* --------------------------------- */

    /* --------------------------------- */
    echo '<h3>Boucle while()</h3>';
    /* --------------------------------- */

    $i = 0;

    while ($i < count($animals)) {
        echo $animals[$i];
        $i++;
    }

    /*
        La population de la ville Marrakech est de 1, 000, 000 d’habitants et elle augmente de 50, 000 habitants par an.
        Celle de la ville Agadir est de 500, 000 habitants et elle augmente de 8% par an.
        Ecrire un algorithme permettant de déterminer dans combien d’années la population de la ville Agadir dépassera celle de la ville Marrakech.
    */

    $populationMarrakech = 1000000;
    $populationAgadir = 500000;
    $i = 0;

    while ($populationAgadir < $populationMarrakech) {
        $populationMarrakech = $populationMarrakech + 50000;
        $populationAgadir = $populationAgadir + ($populationAgadir * 0.08);
        $i++;
    }

    echo "<p>Il faudra $i années pour que la population d'Agadir dépasse celle de Marrakech</p>";


    /* --------------------------------- */
    echo '<h3>Boucle for()</h3>';
    /* --------------------------------- */

    for ($i = 0; $i < count($animals); $i++) {
        echo  "L'animal : $animals[$i] <br>";
    }

    /* --------------------------------- */
    echo '<h3>Boucle foreach()</h3>';
    /* --------------------------------- */

    // foreach
    foreach ($animals as $animal) {
        // echo "$animal <br>";
    }

    foreach ($user as $key => $value) {
        // echo $key .': ' .$value .'<br>';
    }

    /* --------------------------------- */
    echo '<h2>Les structures conditionnelles (if / elseif/ else</h2>';
    /* --------------------------------- */

    $a = 23;
    $b = 5;
    $c = 2;

    // if() : permet de tester une condition. Si la condition est vraie, on execute le code à l'intérieur des accolades.
    // '' = false
    // null = false
    // '0' = false
    // '1' = true
    if ($a < $b) {
        echo "$a est superieur à $b";
    } elseif ($a == $b) {
        echo "$a est égal à $b";
    } else {
        echo 'si aucune condition est rempli le else sera executé <br>';
    }

    // Ecriture alternative :
    if ($a < $b) :
        echo "$a est superieur à $b";
    elseif ($a == $b) :
        echo "$a est égal à $b";
    else :
        echo 'si aucune condition est rempli le else sera executé <br>';
    endif;

    // L'opérateur AND écrit && permet de vérifier que 2 conditions soient réalisées en même temps.
    if ($a > $b && $b > $c) {
        echo 'Ok pour les 2 conditions <br>';
    }

    // L'opérateur OR écrit || permet de vérifier qu'au moins l'une des 2 conditions soit réalisée.
    if (($a === 9 || $b > $c) && $a > $b) {
        echo 'Ok, pour au moins une des 2 conditions <br>';
    }

    // Ecrire un algorithme qui demande à l'utilisateur son age. Il indique ensuite à l'utilisateur quel film il peut aller voir.
    // "Action Man" si moins de 13 ans
    // "Matrix" si il a entre 13 et 18 ans
    // "Evil Dead" si plus de 18 ans

    $age = 10;

    if ($age < 13) {
        echo 'Action Man';
    }

    if ($age >= 13 && $age <= 18) {
        echo 'Matrix';
    }

    if ($age > 18) {
        echo 'Evil Dead';
    }

    /* --------------------------------- */
    echo '<h2>Les fonctions</h2>';
    /* --------------------------------- */

    /* --------------------------------- */
    echo '<h3>Les fonctions utilisateurs</h3>';
    /* --------------------------------- */

    //  On déclare une fonction avec le mot clé function suivi du la fonction puis d'une paire de ()
    function hello()
    {
        echo 'Hello, world!<br>';
    }

    // Pour executer une fonction, on l'appelle par son nom suivi d'une paire de ()
    hello();

    // Fonction avec parametre
    function helloYou($name)
    {
        echo "$name bonjour, $name <br>";
    }

    helloYou('rachid');

    function addition($x, $y)
    {
        echo $x / $y * $x;
    }

    addition(122, 76768);

    function debbug($param)
    {
        echo '<pre>';
        var_dump($param);
        echo '</pre>';
    }

    debbug($animals);
    debbug($country);

    // Fonction avec parametre et return
    function calculDeLaNAsa($a)
    {
        $essence = 77676;
        $res = $essence * $a;

        return $res;
    }

    $x = calculDeLaNAsa(123);

    function displayMovieBasedOnAge($age)
    {
        if ($age < 13) {
            echo 'Action Man';
        }

        if ($age >= 13 && $age <= 18) {
            echo 'Matrix';
        }

        if ($age > 18) {
            echo 'Evil Dead';
        }
    }

    $rachid = 41;
    displayMovieBasedOnAge($rachid);


    /* --------------------------------- */
    echo '<h3>Les fonctions prédéfinies</h3>';
    /* --------------------------------- */

    $message = " 1969. Après avoir passé plus de dix ans à enseigner au Hunter College de New York, l'estimé docteur Jones, professeur d'archéologie, est sur le point de prendre sa retraite et de couler des jours paisibles. Tout bascule après la visite surprise de sa filleule Helena Shaw, qui est à la recherche d'un artefact rare que son père a confié à Indy des années auparavant : le fameux cadran d'Archimède, une relique qui aurait le pouvoir de localiser les fissures temporelles. En arnaqueuse accomplie, Helena vole l’objet et quitte précipitamment le pays afin de le vendre au plus offrant. Indy n'a d'autre choix que de se lancer à sa poursuite. ";

    // Mettre la chaine de caractère en majuscule
    $newMessage = mb_strtoupper($message);
    // echo $newMessage;

    // Mettre la chaine de caractère en minuscule
    // echo mb_strtolower($newMessage);

    // extraire 100 premier caractere suivi de ...
    $messageSubstr = mb_substr($message, 0, 100) . '...';
    echo $messageSubstr;

    // Supprimez les espaces au début et à la fin de la chaine de caractère
    echo strlen($message);
    $message = trim($message);
    echo strlen($message);

    // Remplacez une chaine de caractère par une autre (remplacer sa filleule par la voleuse )
    echo str_replace('sa filleule', 'la voleuse', $message);

    /* --------------------------------- */
    echo '<h3>Les super Globals</h3>';
    /* --------------------------------- */

    // Les superglobales sont des variables de type ARRAY (tableau associatif) qui sont disponibles dans tous les contextes du script.


    /* --------------------------------- */
    echo '<h3>$GLOBALS</h3>';
    /* --------------------------------- */

    // $GLOBALS : Contient l'ensemble des variables globales du script
    // debbug($GLOBALS);
    echo $GLOBALS['message'];

    /* --------------------------------- */
    echo '<h3>$_SERVER</h3>';
    /* --------------------------------- */

    // $_SERVER  : Contient des informations liées au serveur
    debbug($_SERVER);
    echo $_SERVER['MYSQL_HOME'];

    echo "Adresse IP du server : " . $_SERVER['SERVER_NAME'] . '<br>';
    echo "Nom du fichier executé : " . $_SERVER['SCRIPT_NAME'] . '<br>';
    echo "Chemin du fichier executé : " . $_SERVER['SCRIPT_FILENAME'] . '<br>';


    /* --------------------------------- */
    echo '<h3>$_GET[]</h3>';
    /* --------------------------------- */

    // $_GET est une superglobale qui permet de récupérer des informations envoyées en paramètre dans l'URL
    var_dump($_GET);


    /* --------------------------------- */
    echo '<h3>$_POST[]</h3>';
    /* --------------------------------- */

    // $_POST est une superglobale qui permet de récupérer des informations envoyées en paramètre dans le corps de la requête HTTP
    var_dump($_POST);

    /* --------------------------------- */
    echo '<h2>Les inclusions de fichier</h2>';
    /* --------------------------------- */

    // En PHP, il est possible d'inclure des fichiers dans d'autres fichiers avec l'instruction require, include, include_once ou encore require_once (on utilise plutôt require_once en pratique).

    // require 'inclus.php'; // Le fichier est obligatoire pour le fonctionnement du site. Si le fichier n'est pas trouvé, require génère une erreur fatale et stoppe l'exécution du code.
    // include 'inclus.php'; // Le fichier est facultatif pour le fonctionnement du site. Si le fichier n'est pas trouvé, include génère une erreur de type warning et poursuit l'exécution du code.
    // include './include.inc.php';
    // require './include.inc.php';

    // Le _once permet de vérifier si le fichier a déjà été inclus. Si c'est le cas, il ne le ré-inclut pas.
    // include_once './include.inc.php';
    // require_once './include.inc.php';
    // echo $doranco;

    /* --------------------------------- */
    echo '<h2>Les objets</h2>';
    /* --------------------------------- */

    // Un objet est un autre type de données.
    // Il représente un objet réel (par exemple : un produit, un personnage, un panier d'achat, etc.).
    // Un objet est déclaré à partir d'un plan de construction : la classe. La classe est un plan général de l'objet.
    // L'objet est instancié à partir de la classe. Chaque objet est différent, mais ils ont tous la même structure (les mêmes propriétés et les mêmes méthodes).

    class Hero {
        public $pseudo;
        public $vie = 100;

        function hello(){

        }

    }

    $volverine = new Hero();
    
    $volverine->pseudo = 'Volverine';
    echo $volverine->vie;
    echo $volverine->pseudo;
    $volverine->hello();

    $hulk = new Hero();
$hulk->pseudo ='Hulk';
    ?>


</body>

</html>