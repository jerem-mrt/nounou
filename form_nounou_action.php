<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'func_login.php';

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateAnniversaire = $_POST['date'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $presentation = $_POST['presentation'];
    $experience = $_POST['experience'];
    
    $namefile = md5(uniqid(rand(), true));
    $ext = pathinfo($_FILES['photo']['tmp_name'], PATHINFO_EXTENSION);
    $cheminacces = "avatars/{$namefile}.{$ext}";

$resultat = move_uploaded_file($_FILES['photo']['tmp_name'],$cheminacces);

if ($resultat) echo "Transfert réussi";
    
if(verifyEmail($email)){
    
    $queryInsert = "INSERT INTO nounou (nomN, prenomN, dateN, emailN, telephoneN, presentationN, experienceN, photoN) VALUES ('" . $nom . "', '" . $prenom . "', '" . $dateAnniversaire . "', '" . $email . "', " . $telephone . ", '" . $presentation . "', '" . $experience . "', '" . $namefile . "');";
    mysqli_query($database, "SET NAMES UTF8;");
    mysqli_query($database, $queryInsert);
}
 else {
    echo "Vous êtes déjà inscrit";
}
};
        //Vérifier le numéro
        // Traiter la photo
        // Design du formulaire 