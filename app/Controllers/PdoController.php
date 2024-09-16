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

$resultat = $pdo->exec("INSERT INTO `employes` 
(`prenom`, `nom`, `sexe`, `service`, `date_embauche`, `salaire`) 
VALUES ('daniel', 'Baugrand', 'm', 'informatique', '2016-02-08', 500)");

$retour = "Nombre de lignes affectées par le INSERT : $resultat ";

require_once (__DIR__ . "/../Views/pdo.view.php");