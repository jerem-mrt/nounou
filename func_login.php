<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'database.php';

// On vérifie que l'utilisateur n'est pas déjà inscrit. Retourne TRUE s'il n'est pas déjà inscrit. 
function verifyEmail ($email) {
    $query = "SELECT * FROM nounou WHERE email='" . $email . "';";
    $resultat = mysqli_query($GLOBALS['database'], $query);
   
    if (mysqli_num_rows($resultat) === 0) {
    return true;
    }
};

?>