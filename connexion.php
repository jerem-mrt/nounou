<?php

include 'func_login.php';


if (isset($_POST) && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    var_dump($password);

    if ($_POST['role'] = 'nounou') {
        connectMail($bd, 'nounou', $email, $password);
        $id = whichId4Mail($bd, 'nounou', $email);
        var_dump(checkOutBloque($bd, $id));
        var_dump(checkOutCandidature($bd, $id));
        if (checkOutBloque($bd, $id)) {
            $_SESSION['bloque'] = true;
            echo '<div class="alert alert-danger" role="alert">' .
            '<p>Votre compte est bloqué, renseignez-vous après de l\'administrateur du site pour plus d\'informations.</p>' .
            '</div>';
        }
        if (!checkOutCandidature($bd, $id)) {
            $_SESSION['accepte'] = false;
            echo '<div class="alert alert-danger" role="alert">' .
            '<p>Votre inscription est en attente de validation par l\'administrateur.</p>'
            . '</div>';
        }
    } else if ($_POST = 'parent') {
        $id = whichId4Mail($bd, 'parent', $email);
        connectMail($bd, 'parent', $email, $password);
    }
}

var_dump($_SESSION);
?>