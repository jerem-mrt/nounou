<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'func_login.php';

// On vérifie que l'utilisateur est bien passé par le boutton submit.
if (verifyDefinedName(['nom', 'prenom', 'date', 'telephone', 'email', 'password', 'presentation', 'langue'])) {

    // On vérifie que l'utilisateur a rempli chaque champ.
    if (verifierChamps()) {
        var_dump($_POST);
        $nom = addslashes($_POST['nom']);
        $prenom = addslashes($_POST['prenom']);
        $dateNaissance = $_POST['date'];
        $telephone = $_POST['telephone'];
        // $ville = $_POST['nomV'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $presentation = addslashes($_POST['presentation']);
        $experience = addslashes($_POST['experience']);
        $langue = $_POST['langue'];
        $namefile = md5(uniqid(rand(), true));
        $ext = pathinfo($_FILES['photo']['name']);
        $ext = $ext['extension'];
        $cheminacces = "avatars/{$namefile}.{$ext}";
        var_dump($ext);
        $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $cheminacces);

// On prévient l'utilisateur que sa photo a bien été transférée.
        if ($resultat) {
            echo "<p>Transfert réussi</p>";
        }

        // Après avoir vérifié que l'utilisateur n'est pas déjà inscrit, on l'insère dans notre BDD.
        if (verifyEmail($bd, $email)) {

            $queryInsert = "INSERT INTO nounou (nomN, prenomN, dateN, telephoneN, emailN, passwordN, presentationN, experienceN, photoN) VALUES ('" . $nom . "', '" . $prenom . "', '" . $dateNaissance . "', " . $telephone . ", '" . $email . "', '" . $password . "', '" . $presentation . "', '" . $experience . "', '" . $namefile . $ext . "');";
//            foreach($langue as $key){
//                $id = whichId4Mail($bd, 'nounou', $email);
//                $quelLangue = $bd->query('SELECT abreviation FROM langue WHERE langue=' . $key . "';");
//                $abreviation = $quelLangue->fetch();
//                $abreviation = $abreviation[0];
//                $ajoutLangue = "INSERT INTO parle (abreviation, idN) VALUES ('" . $abreviation . "', '" . $id . "');";
//                $bd->exec($ajoutLangue);
//            }

            $bd->query($queryInsert);
            var_dump($queryInsert);
            echo "<p> \n Felicitation votre inscription est réussie. <br /> \n Il ne vous reste plus qu'à attendre que votre compte soit confirmé par l'administrateur.<br /></p>";
        } else {
            echo "Vous êtes déjà inscrit";
        }
    }
} else {
    echo "Vous allez être redirigé vers la page d'inscription afin de la compléter.";
}
 
        //Vérifier le numéro
        // Traiter la photo
        // Design du formulaire 
