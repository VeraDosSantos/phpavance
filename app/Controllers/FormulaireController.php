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

function checkFormat($nameInput, $value){
    global $arrayError;
    $regexName = '/^[a-zA-Zà-üÀ-Ü \-]{2,255}$/';
    $regexGenre = '/^[f|m]{1}$/';
    $regexDate = '/^[1-2][0|9][0-2|5-9][0-9][-][0-1][0-9][-][0-3][0-9]$/';
    $regexSalaire = '/^[\d.,]{1,}$/';
    //Vos regex

    switch ($nameInput) {
        case 'nom':
            if(!preg_match($regexName, $value)){
                $arrayError[] = 'Merci de renseigner un nom correcte!';
            }
            break;
        case 'prenom':
            if(!preg_match($regexName, $value)){
                $arrayError[] = 'Merci de renseigner un prenom correcte!';
            }
            break;
        case 'genre':
            if(!preg_match($regexGenre, $value)){
                $arrayError[] = 'Merci de renseigner un genre correcte!';
            }
            break;
        case 'service':
            if(!preg_match($regexName, $value)){
                $arrayError[] = 'Merci de renseigner un service correcte!';
            }
            break;
        case 'date_embauche':
            if(!preg_match($regexDate, $value)){
                $arrayError[] = 'Merci de renseigner une date correcte!';
            }
            break;
        case 'salaire':
            if(!preg_match($regexSalaire, $value)){
                $arrayError[] = 'Merci de renseigner un salaire correcte!';
            }
            break;
    }
}

function check($nameInput, $value){

    isNotEmpty($nameInput);
    $value = htmlspecialchars($value);
    checkFormat($nameInput, $value);

}

check('nom', $_POST['nom']);
check('prenom', $_POST['prenom']);
check('genre', $_POST['genre']);
check('service', $_POST['service']);
check('date_embauche', $_POST['date_embauche']);
check('salaire', $_POST['salaire']);






require_once (__DIR__ . "/../Views/formulaireInscription.view.php");