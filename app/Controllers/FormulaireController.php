<?php

$arrayError = [];

function isNotEmpty($value) {
    global $arrayError;
    if(empty($_POST[$value])){
        $arrayError[] = "Le champ $value ne peut pas être vide.";
        return $arrayError;
    }
    return false;
}

//Verifier si mes champs ne sont pas vide :
isNotEmpty('nom');
isNotEmpty('prenom');
isNotEmpty('genre');
isNotEmpty('service');
isNotEmpty('date_embauche');
isNotEmpty('salaire');

if(empty($arrayError)){
    $nom = htmlspecialchars($_POST['nom']);

    
}



require_once (__DIR__ . "/../Views/formulaireInscription.view.php");