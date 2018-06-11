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

    // On vérifie qu'aucune adresse e-mail correspondante n'est renvoyée.
    if ($res['NB_RES'] > 0) {
        $return = true;
    } else {
        $return = false;
    }
    
    return $return;
}

;

function whichChamp($bd, $table) {
    $champId = '';
    $champMail = '';

    if ($table === "nounou") {
        $champId = 'idN';
        $champMail = 'emailN';
        $champPassword = 'passwordN';
    } else if ($table === "parent") {
        $champId = 'idP';
        $champMail = 'emailP';
        $champFoyer = 'passwordP';
    } else if ($table === "admin") {
        $champId = 'idA';
        $champMail = 'emailA';
        $champPassword = 'passwordA';
    } else {
        return FALSE;
    }
    $res = [];
    $res[] = $champId;
    $res[] = $champMail;
    $res[] = $champPassword;

    return $res;
}

function whichId4Mail($bd, $table, $email) {
    $champs = whichChamp($bd, $table);
    $requete = $bd->query("SELECT " . $champs[0] . " FROM " . $table . " WHERE " . $champs[1] . "='" . $email . "';");
    $resultat = $requete->fetch();
    return $resultat[0];
}

function whatIsPass4ThisMail($bd, $table, $email) {
    $champs = whichChamp($bd, $table);
    $requete = $bd->query("SELECT " . $champs[2] . " FROM " . $table . " WHERE " . $champs[1] . "='" . $email . "';");
    $passwordHache = $requete->fetch();
    var_dump($passwordHache);
    return $passwordHache[$champs[2]];
}

function connectMail($bd, $table, $email, $password) {
    if (whatIsPass4ThisMail($bd, $table, $email)) {
        // Comparaison du pass envoyé via le formulaire avec la base
        $passwordHache = whatIsPass4ThisMail($bd, $table, $email);
        $isPasswordCorrect = password_verify($password, $passwordHache);

        if (!verifyEmail($bd, $email)) {
            echo 'Mauvais identifiant ou mot de passe !';
        } else {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                echo 'Vous êtes connecté !';
            } else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
        }
    }
}
// Prendre en compte le cas où une nounou est bloquée ou son compte est en attente de validation.

?>

