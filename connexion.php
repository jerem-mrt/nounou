<?php

if (verifyDefinedName(['email', 'password'])) {

    // On vérifie que l'utilisateur a rempli chaque champ.
    if (verifierChamps()) {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        

        if ($requete = $bd->query("SELECT * FROM nounou WHERE email='" . $email . "' and passwordN='" . $password . "');")) {
            
        }
    }
} else {
    echo "Vous allez être redirigé vers la page de connexion.";
}

//TP espcae client
$req = $bd->prepare("SELECT * FROM nounou WHERE email=':email');";
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base

$isPasswordCorrect = password_verify($_POST['password'], $resultat['passwordN']);


if (!$resultat) {

    echo 'Mauvais identifiant ou mot de passe !';
} else {

    if ($isPasswordCorrect) {
        $reqIsBloque = $bd->query ("SELECT accepteN FROM nounou WHERE email='" . $email . "');"
        $resultatIsAccept = $req->fetch();
        if ($resultatIsAccept'accepteN']) {
            session_start();

            $_SESSION['id'] = $resultat['id'];

            $_SESSION['pseudo'] = $pseudo;

            $_SESSION['role'] = 'nounou';

            echo 'Vous êtes connecté !';
        } else {
            echo "Votre compte n'a pas encore été validé par un administrateur."
        }
    } else {

        echo 'Mauvais identifiant ou mot de passe !';
    }
}
?>