<?php

require_once 'func_login.php';

// On vérifie que l'utilisateur est bien passé par le boutton submit.
if (verifyDefinedName(['nomP', 'nomV', 'email', 'password', 'nbEnfants'])) {

    // On vérifie que l'utilisateur a rempli chaque champ.
    if (verifierChamps()) {
        var_dump($_POST);
        $nomP = addslashes($_POST['nomP']);
        
        // Le formulaire transmet le nom de la ville, nous souhaitons de notre côté le 'depcom'
        $nomV = $_POST['nomV'];
        //$nomV = addslashes($_POST['nomV']);
        $requete1 = $bd->query("SELECT depcom FROM ville WHERE  nomV = '".$nomV."';");
        var_dump($requete1);
        $depcom = $requete1->fetch();
                var_dump($depcom);
        $depcom = $depcom[0];
                var_dump($depcom);
       /* //$requete1 = "SELECT depcom FROM ville WHERE upper(nomV) LIKE upper(:nomV)";
        //$requete1 = $bd->prepare('SELECT depcom FROM ville WHERE nomV LIKE :nomV');
        //$requete1->execute(array('nomV' => $nomV));
        //$depcom = $bd->query($requete1);
        
        $requete1 = $bd->prepare('SELECT depcom FROM ville WHERE nomV = ?');
        $requete1->execute(array($nomV));
        $depcom = $requete1->fetchAll();*/
        
        
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $nbEnfants = $_POST['nbEnfants'];


        // Après avoir vérifié que l'utilisateur n'est pas déjà inscrit, on l'insère dans notre BDD.
        if (!verifyEmail($bd, $email)) {

         
            $requete2 =  "INSERT INTO parent (nomP, emailP, passwordP, depcom) VALUES ('" . $nomP . "', '" . $email . "', '" . $password . "', '" . $depcom . "')";
            $bd->exec($requete2);
            
            echo "<p> \n Felicitation votre inscription est réussie. <br /> \n ";
            if($nbEnfants > 1){
                echo "Il ne vous reste plus qu'à lister vos ". $nbEnfants ." enfants.<br /></p>"; // if nbEnfant = 1 ... sinon mettre au pluriel
            } else { // == 1
                echo "Il ne vous reste plus qu'à lister votre enfant.<br /></p>";
            }
            
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