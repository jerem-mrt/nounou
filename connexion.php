<?php

include 'func_login.php';
include 'database.php';


if (isset($_POST) && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    var_dump($password);

    if ($_POST['role'] = 'nounou') {
        if (verifyEmail($bd, 'nounou', $email)) {
            connectMail($bd, 'nounou', $email, $password);
            $id = whichId4Mail($bd, 'nounou', $email);
            if (checkOutBloque($bd, $id)) {
                $_SESSION['bloque'] = true;
                echo '<div class="alert alert-danger" role="alert">' .
                '<p>Votre compte est bloqué, renseignez-vous après de l\'administrateur du site pour plus d\'informations.</p>' .
                '</div>';
            } else if (!checkOutCandidature($bd, $id)) {
                $_SESSION['accepte'] = false;
                echo '<div class="alert alert-danger" role="alert">' .
                '<p>Votre inscription est en attente de validation par l\'administrateur.</p>'
                . '</div>';
            } else {

                var_dump(checkOutBloque($bd, $id));
                var_dump(checkOutCandidature($bd, $id));
            }
        } else if ($_POST = 'parent' && verifyEmail($bd, 'parent', $email)) {
            connectMail($bd, 'parent', $email, $password);
            $id = whichId4Mail($bd, 'parent', $email);
            connectMail($bd, 'parent', $email, $password);
        }
        
        else {
            echo 'Mot de passe ou identifiant incorrect.';
        }
    }
}

?>