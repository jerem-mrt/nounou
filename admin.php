<?php

require_once 'database.php';
require_once 'func_login.php';
require_once 'func_action.php';

// Procédure de connexion:
// On vérifie que l'utilisateur est bien passé par le formulaire de connexion
if (verifyDefinedName(['email', 'password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // On vérifie que l'utilisateur est dans la base de données et on le connecte s'il a saisi le bon mot de passe.
    if (verifyEmail($bd, 'admin', $email)) {
        connectMail($bd, 'admin', $email, $password);
    } else {
        echo 'Mot de passe ou identifiant incorrect.';
    }
}

// Si l'administrateur est connecté
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] = 'admin') {
        
        // ... et qu'il a lancé une demande d'acceptation ou de refus (à travers les liens $_GET on traite sa demande
        if (isset($_GET['idN'])) {
            if ($_GET['decision'] === 'accepter') {
                $queryAccepter = $bd->query('UPDATE nounou SET accepteN = 1 WHERE idN=' . $_GET['idN'] . ';');
            } else if ($_GET['decision'] === 'refuser') {
                $queryAccepter = $bd->query('DELETE FROM nounou WHERE idN=' . $_GET['idN'] . ';');
            }
        }
        
        // On récupère ensuite la liste des nounous candidates.
        $queryRecupCandidature = $bd->query('SELECT idN, photoN, nomN, prenomN, dateN, emailN, experienceN, presentationN FROM nounou WHERE accepteN = 0;');
        $listeCandidature = $queryRecupCandidature->fetchAll();
        
        function ligne($contenu, $gras) {
            if ($gras) {
                echo "<th scope='row'>" . $contenu . "</th>";
            } else {
                echo "<th>" . $contenu . "</th>";
            }
        }

    }
}
// On ouvre un tableau dans lequel on va les lister
        echo "<table class='table'>
  <thead>
    <tr>
      <th scope='col'>Photo</th>
      <th scope='col'>Email</th>
      <th scope='col'>Nom</th>
      <th scope='col'>Prénom</th>
      <th scope='col'>Date de naissance</th>
      <th scope='col'>Expérience</th>
      <th scope='col'>Présentation</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>";

        foreach ($listeCandidature as $key => $value) {
            echo "<tr>";
            $cheminPhoto = "<img src='./avatars/" . $value['photoN'] . "' height='100'>";
            ligne($cheminPhoto, false);
            ligne($value['emailN'], true);
            ligne($value['nomN'], false);
            ligne($value['prenomN'], false);
            ligne($value['dateN'], false);
            ligne($value['experienceN'], false);
            ligne($value['presentationN'], false);
            $lienAccepter = "<a href='admin.php?idN=" . $value['idN'] . "&decision=accepter'>Accepter</a>";
            $lienRefuser = "<a href='admin.php?idN=" . $value['idN'] . "&decision=refuser'>Refuser</a>";
            ligne($lienAccepter . " " . $lienRefuser, false);
            echo "</tr>";
        }

        echo "</tbody>
</table>";

// Produit une ligne de tableau et met en gras le champ si précisé
        
// On exécute la décision demandée via un $_GET.
?>