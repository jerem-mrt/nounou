<?php

require_once 'func_login.php';

// On vérifie que l'utilisateur est bien passé par le boutton submit.
if (verifyDefinedName(['nomP', 'nomV', 'email', 'password', 'nbEnfants'])) {

    // On vérifie que l'utilisateur a rempli chaque champ.
    if (verifierChamps()) {
        var_dump($_POST);
        $nomP = addslashes($_POST['nomP']);
        $nomV = 4061; //addslashes($_POST['nomV']);
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $nbEnfants = $_POST['nbEnfants'];


        // Après avoir vérifié que l'utilisateur n'est pas déjà inscrit, on l'insère dans notre BDD.
        if (!verifyEmail($bd, $email)) {

//           $queryInsert = "INSERT INTO parent (nomP, emailP, passwordP, depccom) VALUES ('" . $nomP . "', '" . $email . "', '" . $password . "', " . $nomV . ");";
//            foreach($langue as $key){
//                $id = whichId4Mail($bd, 'nounou', $email);
//                $quelLangue = $bd->query('SELECT abreviation FROM langue WHERE langue=' . $key . "';");
//                $abreviation = $quelLangue->fetch();
//                $abreviation = $abreviation[0];
//                $ajoutLangue = "INSERT INTO parle (abreviation, idN) VALUES ('" . $abreviation . "', '" . $id . "');";
//                $bd->exec($ajoutLangue);
//            }
            //$bd->query($queryInsert);
            //var_dump($queryInsert);

            $requete =  "INSERT INTO parent (nomP, emailP, passwordP, depccom) VALUES ('" . $nomP . "', '" . $email . "', '" . $password . "', " . $nomV . ");";
            $bd->exec($requete);
            
            echo "<p> \n Felicitation votre inscription est réussie. <br /> \n "
            . "Il ne vous reste plus qu'à lister vos enfants.<br /></p>"; // if nbEnfant = 1 ... sinon mettre au pluriel
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
?>