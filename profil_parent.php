<?php
session_start();
include 'database.php';
include 'form.php';
include 'css.php';
include 'header.php';
require_once 'func_login.php';
require_once 'func_action.php';
redirectUnconnected('parent', SITE_URL . 'login_parent.php');


$queryProfileParent = $bd->prepare('SELECT nomP, emailP, depcom FROM parent WHERE idP=:idP;');
$queryProfileParent->execute(array(
    ':idP' => $_SESSION['id']
));
$resProfilParent = $queryProfileParent->fetchAll();
//    var_dump($resProfilParent);
$nomP = $resProfilParent[0][0];
$emailP = $resProfilParent[0][1];


$depcom = $resProfilParent[0][2];

// On détermine la ville associée
$requete1 = $bd->query("SELECT nomV FROM ville WHERE  depcom = '" . $depcom . "';");
$nomV = $requete1->fetch();
$nomV = $nomV[0];

// On récupère les enfants liés aux parents
// On recupere tout le contenu de la table nounou

/*
 * SELECT enfant.prenomE, enfant.dateE, enfant.restrE, enfant.infoE FROM enfant, lie, parent WHERE parent.idP=lie.idP AND lie.idE = enfant.idE
 */


$reponse = $bd->query("SELECT DISTINCT prenomE, dateE, restrE, infoE "
        . "FROM enfant, lie, parent "
        . "WHERE " . $_SESSION['id'] . "=lie.idP AND lie.idE = enfant.idE");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>Looking for Nounou - Connection Parent</title>


        Template 2098 Health

        http://www.tooplate.com/view/2098-health


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Tooplate">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        //<?php
        stylesheet("animate.css");
        stylesheet("bootstrap.min.css");
        stylesheet("font-awesome.min.css");
        stylesheet("owl.carousel.css");
        stylesheet("owl.theme.default.min.css");
//Main CSS tooplate-style.css
      stylesheet("tooplate-style.css");
        ?>
    </head>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

        PRE LOADER 
        <section class="preloader">
            <div class="spinner">

                <span class="spinner-rotate"></span>

            </div>
        </section>


        <?php include 'menu.php'; ?>

        <section id="container" - login data-stellar-background-ratio="3">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 col-sm-12">
                            <h2><i> Famille <?php echo "$nomP"; ?></i></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 col-sm-12">
                            <h3> De  <?php echo "$nomV"; ?></h3>
                        </div>
                    </div><br><br><br>

                    <!--                    Descriptif de la famille
                                        * - Nombre de nounous ayant gardés leurs enfants
                                        * - Note moyenne que les parents ont donné aux nounous
                                        * - Argent fourni aux nounous (total)-->






                    <!--
                                        Listing des enfants de la famille
                                        *          Particularité : affichage si l'enfant est actuellement gardé    par une nounou
                                        *                          si oui : laquelle ?-->

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 col-sm-12">


                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Restriction Alimentaire</th>
                                        <th scope="col">Informations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($donnees = $reponse->fetch()) {

                                        // calcul de l'âge de l'enfant

                                        echo "<tr>";
                                        echo "<td>" . $donnees['prenomE'] . " </td>";

                                        // Calcul de l'âge
                                        $dateNaissance = new DateTime($donnees['dateE']);
                                        $dateAujourdhui = date("Y-m-d");
                                        $dateAujourdhui = new DateTime($dateAujourdhui);
                                        $interval = $dateAujourdhui->diff($dateNaissance);


                                        echo "<td>" . $interval->format('%y ans') . "</td>";
                                        echo "<td>" . $donnees['restrE'] . "</td>";
                                        echo "<td>" . $donnees['infoE'] . " </td>";
                                        echo "</tr>";
                                    }
                                    ?>



                                </tbody></table>
                        </div> <div class="col-md-1"></div>
                        <div class="col-md-11 col-sm-12">
                            <div class="collapse navbar-collapse">
                                <h3>Rechercher une nounou </h3>
                                <li class="bouton-garde"><a href="form_recherche_nounou_action.php">Pour une garde ponctuelle</a></li>'                         
                                <li class="bouton-garde"><a href="form_recherche_nounou_langue_action.php">Pour une garde d'enfant en langues étrangères</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                        <div class="col-md-11 col-sm-12 confirmerGardes">
                            <h3>Confirmer les gardes effectuées</h3>
                            <?php
                            $reqlisteGardesQ = $bd->query("SELECT count(*) NB_RES FROM garde WHERE date <= CURRENT_DATE() and idE IN (SELECT idE FROM lie WHERE idP=" . $_SESSION['id'] . ")");
                            $listeGardesQ = $reqlisteGardesQ->fetchAll();
                            if ($listeGardesQ[0][0] !== 0) {
                                $reqlisteGardes = $bd->query("SELECT DISTINCT idN, date, heureD, heureF FROM garde WHERE date <= CURRENT_DATE() and idE IN (SELECT idE FROM lie WHERE idP=" . $_SESSION['id'] . ")");
                                $listeGardes = $reqlisteGardes->fetchAll();
                                
                                foreach ($listeGardes as $key => $value) {
                                    //On regarde combien d'enfant ont été gardé lors de ce créneau.
                                    $reqNbGardes = $bd->query("SELECT count(idE) FROM garde WHERE date = '" . $value['date'] . "' and idN = '" . $value['idN'] . "' and heureD = '" . $value['heureD'] . "' and heureF = '" . $value['heureF'] . "';");
                                    $nbGarde = $reqNbGardes->fetchAll();

                                    echo "<div class='alert alert-warning' role='alert'>";
                                    // L'action redirige vers cette même page. Le script est inclus vient de confirmer_garde.php
                                    echo "<form method='post' action='profil_parent.php'>";
                                    echo "Concernant la garde du " . date("d-m-Y", strtotime($value['date'])) . " (de ". $value['heureD']. " à ". $value['heureF'].") avec " . whichPrenom4Id($bd, 'nounou', $value['idN']) . " " . whichNom4Id($bd, 'nounou', $value['idN']) . "<br>";
                                    echo "<label for='appreciation'>Laissez une appréciation : </label><input type='text' name='appreciation[]'><br>";
                                    echo "<label for='note'>Note attribué (0 nounou à éviter, 5 nounou recommandée)</label>
                                    <input type='radio' name='note[]' value= 1 /> 1 \n
                                    <input type='radio' name='note[]' value= 2 /> 2 \n
                                    <input type='radio' name='note[]' value= 3 /> 3 \n
                                    <input type='radio' name='note[]' value= 4 /> 4 \n
                                    <input type='radio' name='note[]' value= 5 /> 5 \n";
                                    echo "<input type='hidden' name='idN' value='" . $value['idN'] . "'> \n";
                                    echo "<input type='hidden' name='date' value='" . $value['idN'] . "'> \n";
                                    echo "<input type='hidden' name='heureD' value='" . $value['heureD'] . "'> \n";
                                    echo "<input type='hidden' name='heureF' value='" . $value['heureF'] . "'> \n";
                                    echo "<input type='submit' value='Confirmer la garde'>";
                                    echo "</form>";
                                    echo "</div>";
                                }
                                
                            }
                            ?>
                        </div>

                    </div>
                    </section>
 <?php        include 'footer.php'; ?>


<!--                    SCRIPTS -->
                    <?php
                    script("jquery.js");
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


