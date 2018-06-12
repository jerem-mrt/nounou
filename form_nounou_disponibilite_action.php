<?php
session_start();
require_once 'database.php';
require_once 'form.php';
require_once 'css.php';
require_once 'func_login.php';
redirectUnconnected('nounou', SITE_URL . 'login_nounou.php');
?>


<div class="col-md-12 col-sm-12">
    <?php
    var_dump($_POST);
    if (verifierChamps()) {
        //Si le choix a été fait d'ajouter une disponibilité récurrente, on récupère laquelle.
        $dispoRecurrente = $_POST['recurrence'];
        if ($dispoRecurrente = 'on') {
            if ($reccurence === "a-des-heures-differentes-toute-la-semaine") {
                if (isset($_POST['joursDispo'])) {
                    $joursDispo = $_POST['joursDispo'];
                    foreach ($joursDispo as $key) {
                        $name = 'creneaux' . $key;
                        $heureDebut = $_POST[$name][0];
                        $heureFin = $_POST[$name][1];
                        $bd->
                    }
                }
            }



            if (isset($_POST['dateDispoPonctuelle'])) {
                if (isset($_POST['dateDispoHeureD'])) {
                    if (isset($POST['dateDispoHeureF'])) {
                        $dateDispoPonctuelle = $_POST['dateDispoPonctuelle'];
                        $dateDispoHeureD = $_POST['dateDispoHeureD'];
                        $dateDispoHeureF = $POST['dateDispoHeureF'];

                        var_dump($dateDispoPonctuelle);
                        var_dump($dateDispoHeureD);
                        var_dump($dateDispoHeureF);
                    }
                }
            }
        }
    }
    ?>