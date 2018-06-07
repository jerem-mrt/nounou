<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'database.php';

// Vérifier que chacun des champs est bien rempli.
function verifyDefinedName($listeName) {
    $err = 1;
    foreach ($listeName as $key) {
        if (isset($_POST[$key])) {
            $err = 0;
        }
    }
    if ($err === 0) {
        return true;
    }
}

function verifierChamps() {
    //var_dump($_POST);
    $err = [];
    foreach ($_POST as $key => $value) {
        if (!empty($value)) {
            
        } else {
            $err[] = "Le champ " . $key . " n'a pas été complété. <br />";
        }
    }
    if (sizeof($err) !== 0) {
        foreach ($err as $key) {
            echo $key;
        }
        return false;
    } else {
        return true;
    }
//var_dump($err);
}

// On vérifie que l'utilisateur n'est pas déjà inscrit. Retourne TRUE s'il n'est pas déjà inscrit. 
function verifyEmail($bd, $email) {

    $requete = $bd->prepare('SELECT count(*) NB_RES FROM nounou WHERE emailN=:email'); //j'effectue ma requête SQL grâce au mot-clé LIKE
    $data = array(
        'email' => $email
    );
    $requete->execute($data);
    $res = $requete->fetch();
//    $requete = $bd->query ("SELECT count(*) NB_RES FROM nounou WHERE emailN='" . $email . "';");

    var_dump($res);
    // On vérifie qu'aucune adresse e-mail correspondante n'est renvoyée.
    if ($res['NB_RES'] > 0) {
        return false;
    } else {
        return true;
    }
}

;

function whichId4Mail($bd, $table, $email) {
    $champId = '';
    $champMail = '';

    if ($table === "nounou") {
        $champId = 'idN';
        $champMail = 'emailN';
    } else if ($table === "parent") {
        $champId = 'idP';
        $champMail = 'emailP';
    } else if ($table === "admin") {
        $champId = 'idA';
        $champMail = 'emailA';
    } else {
        return FALSE;
    }
    $requete = $bd->query("SELECT " . $champId . " FROM " . $table . " WHERE " . $champMail . "='" . $email . "';");
    $resultat = $requete->fetch();
    return $resultat[0];
}

?>