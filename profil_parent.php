<?php
//session_start();
include 'database.php';
include 'form.php';
include 'css.php';
include 'header.php';
require_once 'func_login.php';
require_once 'func_action.php';
//redirectUnconnected('parent', SITE_URL . 'login_parent.php');


if (isset($_GET['id'])) {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    }

    $queryProfileParent = $bd->prepare('SELECT nomP, emailP, depcom FROM parent WHERE idP=:idP;');
    $queryProfileParent->execute(array(
        ':idP' => $id
    ));
    $resProfilParent = $queryProfileParent->fetchAll();
//    var_dump($resProfilParent);
    $nomP = $resProfilParent[0][0];
    $emailP = $resProfilParent[0][1];



    $depcom = $resProfilParent[0][3];

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
                . "WHERE ".$id."=lie.idP AND lie.idE = enfant.idE");
    
} else {
    exit();
}
?>



<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>Looking for Nounou - Connection Parent</title>
        <!--
        
        Template 2098 Health
        
        http://www.tooplate.com/view/2098-health
        
        -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Tooplate">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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


        <?php include 'menu.php'; ?>


        <!-- MAKE AN APPOINTMENT -->
        <section id="container" - login data-stellar-background-ratio="3">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-1"></div>
                        

                        <!--Famille X-->


                        <div class="col-md-1 col-sm-12" description top>
                            <h2> Famille <?php echo "$nomP"; ?></h2>
                            <h3> De  <?php echo "$nomV"; ?></h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>


                    <!--Descriptif de la famille
                        * - Nombre de nounous ayant gardés leurs enfants
                        * - Note moyenne que les parents ont donné aux nounous
                        * - Argent fourni aux nounous (total)
                    -->






                    <!--Listing des enfants de la famille
                     *          Particularité : affichage si l'enfant est actuellement gardé    par une nounou
                     *                          si oui : laquelle ?-->


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
                        echo "<td> $donnees[prenomE] </td>";
                        
                        // Calcul de l'âge
                        $dateNaissance = new DateTime($donnees[dateE]);
                        $dateAujourdhui = date("Y-m-d");
                        $dateAujourdhui = new DateTime($dateAujourdhui);
                        $interval = $dateAujourdhui->diff($dateNaissance);
                        
                        
                        echo "<td> $interval->format('%y ans') </td>";
                        echo "<td> $donnees[restrE] </td>";
                        echo "<td> $donnees[infoE] </td>";
                         echo "</tr>";
                     }
                    ?>
                            
                            
                    
                    </tbody></table>
                    
                    
                    
                  
                </div>
            </div>
        </section>  

        <!--Bouton pour lancer une recherche pour une nounou-->
        
        <div class="collapse navbar-collapse">
            <h1>Rechercher une nounou </h1>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="inscription-btn"><a href="form_recherche_nounou_action.php">Pour une garde ponctuelle</a></li>'                         
                        <li class="inscription-btn"><a href="form_recherche_nounou_langue_action.php">Pour une garde d'enfant en langues étrangères</a></li>
                    </ul>
               </div>
        <!--Bouton pour une recherche sur une nounou en fonction de la langue-->





        <!-- SCRIPTS -->
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


