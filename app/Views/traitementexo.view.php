<?php
include '../Views/partials/head.php';
//inclure head et footer

/** Exercice 1 : Affichage des paramètres
 * 
 *  Objectif : Afficher tous les paramètres passés dans l'URL
 * 
 * 
 *  1 . En gardant la page get.view.php, 
 *  utiliser les informations de cette page pour les passer en paramètres d'URL
 * 
 *  2 . Dans le fichier nommé : traitementexo.view.php où $_GET doit être récupéré, vérifié les paramètres affichés sur le navigateur 
 * 
 *  3 . S'assurer que les paramètres article,couleur et prix sont présents dans l'URL
 * 
 *  4. Si un ou plusieurs paramètres manquent, afficher un message d'erreur spécifique pour chacun
 * 
 *  Exemple : "<p> Le paramètre 'Article' est manquant'"
 */

echo "<h1>Exercice traitement GET</h1>";
echo "<h2>Exercice 1</h2>";

if (isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) {
    echo '<p> le paramètre ' . htmlspecialchars($_GET['article']) . ' est présent </p>';
    echo '<p> le paramètre ' . htmlspecialchars($_GET['couleur']) . ' est présent </p>';
    echo '<p> le paramètre ' . htmlspecialchars($_GET['prix']) . ' est présent </p>';
} else if (!isset($_GET['article'])) {
    echo '<p> Le paramètre ' . htmlspecialchars($_GET['article']) . 'est absent </p>';
} else if (!isset($_GET['couleur'])) {
    echo '<p> Le paramètre ' . htmlspecialchars($_GET['couleur']) . 'est absent </p>';
} else if (!isset($_GET['prix'])) {
    echo '<p> Le paramètre ' . htmlspecialchars($_GET['prix']) . 'est absent </p>';
}


/** Exercice 2 : Conversion du prix
 * 
 *  Objectif : Convertir le prix reçu dans l'URL de dollars à euros (utiliser le taux de conversion de 1 dollars = 0.92 euros)
 * 
 *  1 . Récupérer le dollars passé dans l'URL
 * 
 *  2 . Convertir en euros
 * 
 *  3 . Afficher le prix converti
 */

echo "<h2>Exercice 2</h2>";

if(isset($_GET['prix'])){
    $prix = floatval($_GET['prix']);

    $result = dollarsToEuro($prix);
    echo "<p>Prix en euros : $result</p>";
}

function dollarsToEuro($prix){
    $prixEuro = $prix * 0.92;
    return $prixEuro;
}


/** Exercice 3 : Affichage d'un message personnalisé
 * 
 *  Objectif : Afficher un message personnalisé en fonction de la couleur passée dans l'URL
 * 
 *  1 . Récupérer la couleur passée dans l'URL
 * 
 *  2 . Afficher un message en fonction de la couleur ( exemple si couleur jaune : "<p> Cette couleur me fait penser au soleil ! </p>)
 * 
 */

 echo "<h2>Exercice 3</h2>";

 if(isset($_GET['couleur'])){
    $couleur = htmlspecialchars($_GET['couleur']);
    switch ($couleur) {
        case 'jaune':
            echo "<p>Cette couleur me fait penser au soleil !</p>";
            break;
        case 'bleu':
            echo "<p>Cette couleur me rappelle l'océan.</p>";
            break;
        case 'rouge':
            echo "<p>Cette couleur évoque la passion !</p>";
            break;
        case 'blanc':
            echo "<p>Cette couleur représente la pureté.</p>";
            break;
        default:
            echo "<p>Couleur inconnue.</p>";
    }
 }

/** Exercice 4 : Vérification du prix minimum
 * 
 *  Objectif : Vérifier si le prix reçu dans l'URL est supérieur à un montant minimum et afficher un message appriprié
 * 
 *  1 . Déclarer un prix minimum (20 par exemple)
 * 
 *  2 . Comparer le prix reçu dans l'URL avec le prix minimum
 * 
 *  3 . Afficher un message indiquant si le prix est suffisant ou non 
 */


 echo "<h2>Exercice 4</h2>";

 $minPrice = 20;

 if(isset($_GET['prix'])){
    $price = floatval($_GET['prix']);
    if($price < $minPrice){
        echo "<p>mon prix est plus petit que $minPrice </p>";
    } else {
        echo "<p>mon prix est plus grand que $minPrice </p>";
    }
 }

 include '../Views/partials/footer.php';