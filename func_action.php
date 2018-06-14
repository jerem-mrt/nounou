<?php

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

// Récupère le numéro du jour auquel la date correspond.
function whatNumberOf($date) {
    $timestamp = strtotime($time);
    $recurrence = date("N", $timestamp);
}


?>