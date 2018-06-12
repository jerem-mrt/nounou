<?php

function verifyRecurrenceAlreadySaved($idN, $recurrence, $heureD, $heureF) {
    $query = $bd->prepare('SELECT heureD, heureF FROM disponibilite WHERE idN = :id ;');
    $res = $query->execute(array(
    ':id' => $idN
    ));
    $res = $res->fetchAll();

    foreach ($res as $key => $value) {
        $err;
        $listeJours = ['Lundis', 'Mardis', 'Mercredis', 'Jeudis', 'Vendredis', 'Samedis', 'Dimanches'];
        if ($key['recurrence'] === $recurrence) {
            if($key['heureD'] => $heureD => $heureF => $key['heureF']) {
                $messageErreur = 'Vous avez déjà indiqué être disponibles les ' . normaliser_text($listeJours[$recurrence]) . "de " . $heureD . " à " . $heureF . ". Merci de bien vouloir supprimer ce créneau de votre planning avant de faire votre ajout." )
                echo $messageErreur;
                return true;
            }
        }
    }
}
