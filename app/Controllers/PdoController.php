<?php
//ici je vais faire mes controlles
function debug($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

//création d'une connexion PDO:
$pdo = new PDO(
     // driver mysql (pourrait être oralce, IBM, ODBC...) + nom du serveur de la BDD + nom de la BDD 
    'mysql:host=localhost;dbname=societe', 
    'root',   // pseudo de la BDD
    '',       // mdp de la BDD
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  // pour afficher les messages d'erreur SQL
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
    )  // définition du jeu de caractères des échabges avec la BDD
);

$resultat;
//Ici on insert une ligne de valeur :
// $resultat = $pdo->exec("INSERT INTO `employes` 
// (`prenom`, `nom`, `sexe`, `service`, `date_embauche`, `salaire`) 
// VALUES ('daniel', 'Baugrand', 'm', 'informatique', '2016-02-08', 500)");

$retour = "Nombre de lignes affectées par le INSERT : $resultat ";

$result = $pdo->query("SELECT `nom`, `prenom` FROM employes WHERE prenom = 'daniel'");

// la méthode fetch() avec le paramètre PDO::FETCH_ASSOC permet de transformer l'objet $result 
//en un ARRAY associatif dont les indices correspondent aux noms des champs (*) de la requête SQL
$employe = $result->fetch(PDO::FETCH_ASSOC);

$maRequete = $pdo->query("SELECT `nom`, `prenom` FROM `employes`");

//// retourne toutes les lignes de résultats dans un tableau multidimensionnel : 
//on a 1 sous-array associatif à chaque indice numérique de $donnees. 
//On peut mettre aussi FETCH_NUM pour des sous-arrays indicés numériquement, 
//ou fetchAll() pour des sous-arrays numériques ET associatifs
$mesDonnees = $maRequete->fetchAll(PDO::FETCH_ASSOC);


$nom = 'sennard';

// Une requête préparée se réalise en 3 étapes :
// Etape 1 : préparer le requête :
$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom");  // :nom est marqueur nominatif qui est en attente d'une valeur


// Etape 2 : lier les marqueurs aux valeurs :
// bindParam() reçoit exclusivement une VARIABLE vers laquelle pointe le marqueur (on ne peut pas y mettre une valeur directement).
// Ainsi, si le contenu de la variable change, la valeur du marqueur changera automatiquement (pas besoin de refaire bindParam).
$resultat->bindParam(':nom', $nom); 


// Etape 3 : exécuter la requête :
$resultat->execute();


//ici j'ai le nom du client
$nom = 'jack';

// 1- prépare la requête :
$resultat = $pdo->prepare("SELECT * FROM employes WHERE prenom = :nom");

// 2- lier les marqueurs aux valeurs :
// bindValue() reçoit une variable OU une valeur directement. 
//Le marqueur point uniquement vers la valeur : si celle-ci change, 
//il faudra refaire un bindValue lors d'un nouvel execute() pour tenir compte de cette nouvelle valeur 
//(sinon le marqueur conserve l'ancienne valeur).
$resultat->bindValue(':nom', $nom);  

// 3- exécuter la requête :
$resultat->execute();

// Puis on affiche le résultat :
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);


require_once (__DIR__ . "/../Views/pdo.view.php");