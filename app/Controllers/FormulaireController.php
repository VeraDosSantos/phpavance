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



function checkFormat($nameInput, $value){
    global $arrayError;
    $regexName = '/^[a-zA-Zà-üÀ-Ü \-]{2,255}$/';
    //Vos regex

    switch ($nameInput) {
        case 'nom':
            if(!preg_match($regexName, $value)){
                $arrayError[] = 'Merci de renseigner un nom correcte';
            }
            break;
    }
}


if(empty($arrayError)){
    $nom = htmlspecialchars($_POST['nom']);

    checkFormat('nom', $nom);
 
}



require_once (__DIR__ . "/../Views/formulaireInscription.view.php");