<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function input_text($nom, $name, $description) {
    $res = "<label for='" . $name . "'>" . $nom . "</label>\n" . "<br />\n <input name='" . $name . "' type='text' id='form-control' class='" . $name . "' placeholder='" . $description . "'><br />\n";
    echo $res;
    return $res;
}

;

function select_option($listeOptions) {
    foreach ($listeOptions as $key) {
        echo "<option value='" . normaliser_text($key) . "'>" . ucfirst($key) . "</option> \n";
    }
}

;

function normaliser_text($text) {
    $text = supprimerAccents($text);
    $text = str_replace(' ', '-', $text);
    $text = strtolower($text);
    return $text;
}

;

function supprimerAccents($str, $charset = 'utf-8') {

    $str = htmlentities($str, ENT_NOQUOTES, $charset);

    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
    $str = preg_replace('#&[^;]+;#', '', $str);

    return $str;
}

;

function case_a_cocher($liste) {
    echo "<div class='form-check'>";
    foreach ($liste as $key) {
        echo "<input type='checkbox' id='J" . $key . "' name='joursRecurrents' value='" . normaliser_text($key) . "' class = 'form-check-input hidden'>\n" .
        "<label class='form-check-label' for='J" . $key . "'> les " . $key . "</label> \n";
    }
    echo "</div>";
}

;

function fromTimetoTime($name) {
    echo "de <input type='time' name='creneaux" . $name . "[]' > à <input type='time' name='creneaux". $name . "[]' > ";
}

function listeCreneauxJours($liste) {
    foreach ($liste as $value) {
        echo "<div class='form-check'>
                                            <input class='form-check-input' name='joursDispo[]' type='checkbox' value='" . normaliser_text($value) . "' id='" . normaliser_text($value) . "'>
                                            <label class='form-check-label' for='" . normaliser_text($value) . "'>
                                                " . $value . "
                                            </label>
                                          ";
        echo fromTimetoTime(normaliser_text($value)) . "
                                        </div>";
    }
}

$listeJours = ['Lundis', 'Mardis', 'Mercredis', 'Jeudis', 'Vendredis', 'Jeudis', 'Vendredis', 'Samedis', 'Dimanches'];
?>