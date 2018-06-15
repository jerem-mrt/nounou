<?php

/*
 * 
 * FORM ENFANT ACTION PHP
 * 
 * 
 */
require_once 'func_login.php';
require_once 'func_action.php';

// On vérifie que l'utilisateur est bien passé par le boutton submit.
if (verifyDefinedName(['prenomE', 'dateE', 'restrE', 'infoE', 'idP'])) {

    // On vérifie que l'utilisateur a rempli chaque champ.
    if (verifierChamps()) {
        
        var_dump($_POST);
        
        $prenomE = addslashes($_POST['prenomE']);
        $dateE = $_POST['dateE'];
        $restrE = addslashes($_POST['restrE']);
        $infoE = addslashes($_POST['infoE']);

        // Champ caché : idP

        $idP = $_POST['idP'];
        
        // Insertion dans la table Enfant

        $requeteA = "INSERT INTO enfant (prenomE, dateE, restrE, infoE) VALUES ('" . $prenomE . "', '" . $dateE . "', '" . $restrE . "', '" . $infoE . "')";
        $bd->exec($requeteA);

        // Recherche idE
        
        // Ici : on part de l'idée que les enfants inscrits ne peuvent pas s'appeler pareil et être né le même jour
        $requeteB = $bd->query("SELECT idE FROM enfant WHERE  prenomE = '" . $prenomE . "' AND dateE ='".$dateE."';");
        var_dump($requeteB);
        $idE = $requeteB->fetch();
        var_dump($requeteB);
        $idE = $idE[0];

        // On lie parent et enfant
        
        $requeteC = "INSERT INTO lie (idE,idP) VALUES ('" . $idE . "', '" . $idP . "')";
        var_dump($requeteC);
        $bd->exec($requeteC);
    } else {
        echo "Votre enfant déjà inscrit";
    }
} else {
    echo "Vous allez être redirigé vers la page d'inscription afin de la compléter.";
}
