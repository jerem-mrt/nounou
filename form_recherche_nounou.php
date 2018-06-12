<?php
include 'database.php';
include 'form.php';
include 'css.php';
include 'header.php';
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

        <!-- PARTIE FORMULAIRE-->
        <section id="appointment" data-stellar-background-ratio="3">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <!-- FORMULAIRE RECHERCHE NOUNOU -->
                        <form id="appointment-form" role="form" method="post" action="form_recherche_nounou_action.php" enctype="multipart/form-data">

                            <!-- SECTION TITLE -->
                            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                <h2 align="center">A la recherche d'une nounou ?</h2>
                            </div>

                            <div class="wow fadeInUp" data-wow-delay="0.8s">

                                <!-- Ville -->

                                <div class="col-md-0 col-sm-3 ui-widget">
                                    <label for="nomV">Ville</label></p>
                                    <input id="nomV" type="text" name="nomV" placeholder="Votre ville">
                                </div>

                                <!-- Département -->
                                <!-- Faire en sorte que l'utilisateur ne saisisse que des chiffres
                                et surtout que lorsqu'il saisit la ville, que ça change automatiquement le num du département
                                
                                <div class="col-md-3 col-sm-6">
                                    <label for="dep">Departement</label>
                                    <input id="nomV" type="text" name="dep" placeholder="Votre departement">
                                </div>--> 

                                <!-- Plage horaire -->
                                <!-- ????????????????? -->
                                <div class="col-md-6 col-sm-12">
                                    <label>Garde ponctuelle </label><p></p>
                                    <input type="date" name="dispo[date][]"> de <input type="time" name="dispo[heureD][]"> à <input type="time" name="dispo[heureF][]">.
                                </div>




                                <button type="submit" class="form-control" id="cf-submit">Rechercher</button>

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>



    <!-- SCRIPTS -->
    <?php
    script("bootstrap.min.js");
    script("jquery.sticky.js");
    script("jquery.stellar.min.js");
    script("wow.min.js");
    script("smoothscroll.js");
    script("owl.carousel.min.js");
    script("custom.js");
    ?>
    <script>
        $(function () {
            $("#nomV").autocomplete({
                source: 'rechercheVille.php',
                minLength: 2 // on indique qu'il faut taper au moins 3 caractères pour afficher l'autocomplétion
            });
        });
    </script>
</body>
</html>


