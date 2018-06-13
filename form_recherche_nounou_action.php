<?php
include 'database.php';
include 'form.php';
include 'css.php';
include 'header.php';

require_once 'func_login.php';
require_once 'func_action.php';
?><!DOCTYPE html>
<html lang="en">


    <head>

        <title>Looking For Nounou</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Tooplate">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


        <?php
        stylesheet("animate.css");
        stylesheet("bootstrap.min.css");
        stylesheet("font-awesome.min.css");
        stylesheet("owl.carousel.css");
        stylesheet("owl.theme.default.min.css");
// Main CSS tooplate-style.css
        stylesheet("tooplate-style.css");
        ?>

    </head>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


        <!-- PRE LOADER -->
        <section class="preloader">
            <div class="spinner">

                <span class="spinner-rotate"></span>

            </div>
        </section>

        <!-- PARTIE FORMULAIRE A COPIER DE FORM RECHERCHE NOUNOU-->
        <section id="appointment" data-stellar-background-ratio="3">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <!-- FORMULAIRE RECHERCHE NOUNOU -->
                        <form id="appointment-form" role="form" method="post" action="form_recherche_nounou.php" enctype="multipart/form-data">

                            <!-- SECTION TITLE -->
                            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                <h2 align="center">A la recherche d'une nounou ?</h2>
                            </div>

                            <div class="wow fadeInUp" data-wow-delay="0.8s">

                                <!-- Ville -->

                                <div class="col-md-0 col-sm-4 ui-widget">
                                    <label for="nomV">Ville</label><p></p>
                                    <input id="nomV" type="text" name="nomV" placeholder="Votre ville">
                                </div>

                                <!-- Département -->
                                <!-- Faire en sorte que l'utilisateur ne saisisse que des chiffres -->
                                <!-- ????????????????? -->

                                <!-- Date de recherche --> 
                                <div class="col-md-4 col-sm-8">
                                    <label for="date">Jour de garde</label>
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>

                                <!-- Plage horaire -->
                                <!-- ????????????????? -->





                                <button type="submit" class="form-control" id="cf-submit">Rechercher</button>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </section>
        <?php
        
        // RECUPERATION DES DONNEE(S) SAISIE(S) PAR L'UTILISATEUR
        
        /*
         * 2 cas possibles :
         * - les parents font seulement une recherche sur la plage horaire : affichage de toutes les nounous disponible sur ce créneau
         * - les parents font une recherche sur la ville ET la plage horaire : affichage de toutes les nounous disponible sur ce créneau et dans cette ville
         * 
         * A.N. : le cas d'affichage de toutes les nounous n'est pas possible ici
         */
        var_dump($_POST);
        var_dump(verifyEmptyName(['nomV']));
        
        if (verifyEmptyName(['dispo[date]', 'dispo[heureD]', 'dispo[heureF]', 'nomV'])) {
            if ((!verifyEmptyName(['dispo[date]', 'dispo[heureD]', 'dispo[heureF]'])) && (verifyEmptyName(['nomV']))) {
                //L'utilisateur a seulement realise une recherche sur une plage horaire mais pas sur une ville
                echo "L'utilisateur a seulement realise une recherche sur une plage horaire mais pas sur une ville";
            } elseif (!verifyEmptyName(['dispo[date]', 'dispo[heureD]', 'dispo[heureF]', 'nomV'])) {
                //L'utilisateur a realise une recherche sur une plage horaire ET sur une ville
                echo "L'utilisateur a realise une recherche sur une plage horaire ET sur une ville";
            } else {
                echo "Aucun champ rempli";
            }
        } else {
            echo "Aucun champ n'est défini";
        }



// Création du tableau des nounous en lien avec la recherche
        echo'<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Date de Naissance</th>
      <th scope="col">Ville</th>
      <th scope="col">Réserver</th>
    </tr>
  </thead>
  <tbody>';

// On recupere tout le contenu de la table news
        $reponse = $bd->query('SELECT prenomN, nomN, dateN, depcom FROM nounou');


// On affiche le resultat
        while ($donnees = $reponse->fetch()) {
            //On affiche les données dans le tableau
            echo "<tr>";
            echo "<td> $donnees[prenomN] </td>";
            echo "<td> $donnees[nomN] </td>";
            echo "<td> $donnees[dateN] </td>";

            // Equivalent depcom - nom ville

            $requete1 = $bd->query("SELECT nomV FROM ville WHERE  depcom = '" . $donnees['depcom'] . "';");
            //var_dump($requete1);
            $nomV = $requete1->fetch();
            //var_dump($depcom);x
            $nomV = $nomV[0];

            echo "<td> $nomV </td>";

            // Bouton de réservation
            // Ouverture d'un formulaire, et tous les champs sont hidden (valeurs ci-dessus)
            // Et la méthode post ira vers form_reservation_action.php
            // /!\ RAJOUTER DES HIDDENS DE L'HEURE ET DE LA DATE /!\ 
            echo'<td> <form id="appointment-form" role="form" method="post" action="form_reservation_action.php" enctype="multipart/form-data">'
            . '<input type="hidden" value="' . $donnees['prenomN'] . '" />'
            . '<input type="hidden" value="' . $donnees['nomN'] . '" />'
            . '<button type="submit" class="form-control" id="cf-submit">Réserver</button>'
            . '</form></td>';

            echo "</tr>";
        }
        echo '</tbody></table>';

        $reponse->closeCursor();


//<!-- SCRIPTS -->

        script("bootstrap.min.js");
        script("jquery.sticky.js");
        script("jquery.stellar.min.js");
        script("wow.min.js");
        script("smoothscroll.js");
        script("owl.carousel.min.js");
        script("custom.js");
        ?>

    </body>
</html>






