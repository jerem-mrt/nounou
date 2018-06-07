<?php
        include 'database.php';
        include 'form.php';
        include 'css.php';
        include 'header.php';
        include 'footer.php';
    
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

    

     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!--Nom du site-->
                    <a href="index.php" class="navbar-brand">Looking For Nounou</a>
                    <!--<a href="index.php" class="navbar-brand"><img src=" health-center-master/images/l4n-image_mini.jpg" /></a>-->
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <!-- <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>-->
                         <li class="appointment-btn"><a href="#appointment">Se connecter</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <!--<h3>Let's make your life happier</h3>-->
                                             <h1>Rechercher une nounou</h1>
                                             <!--Rajouter le lien vers la recherche-->
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Lancer la recherche</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <!--<h3>Des nounous près de chez</h3>-->
                                             <h1>Des nounous près de chez vous</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Plus d'informations</a>>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <!--<<h3>Pellentesque nec libero nisi</h3>-->
                                            <h1>Un service disponible 7j/7</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form autocomplete="off" id="appointment-form" role="form" method="post" action="form_parent_action.php" enctype="multipart/form-data">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2 align="center">Postulez en tant que parent</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-12 col-sm-12">
                                      <?php
                                        input_text("Nom de famille", "nomP", "Votre nom"); ?>
                                       
                                   </div>

                                   <div class="col-md-12 col-sm-12 autocomplete">
                                         <label for="telephoneP">Ville</label>
                                        <input id="nomV" type="text" name="nomV" placeholder="Votre ville">
                                   </div>

                                  <div class="col-md-12 col-sm-12">
                                        <label for="telephoneP">N° de téléphone</label>
                                        <input type="tel" class="form-control" id="phone" name="telephoneP" placeholder="Téléphone">
                                  </div>

                                  <div class="col-md-12 col-sm-12">
                                      <label for="email">Email</label> <br />
                                          <input type="email" name='email'><br />
                                  </div>



                                  <!--L'idée serait qu'en fonction du nombre sélectionner apparaissent X Champs
                                  avec prénom date de naissances / restrictions alimentaires etc....
                                Si l'utilisateur met + : il faudrait qu'une zone de texte apparaissent pour qu'elle écrive son nombre-->
                                  <div class="col-md-12 col-sm-12">
                                    <label for="nbEnfants">Nombre d'enfants</label>
                                  <input type="radio" name="nbEnfants" value="1"/> 1
                                  <input type="radio" name="nbEnfants" value="2"/> 2
                                  <input type="radio" name="nbEnfants" value="3"/> 3
                                  <input type="radio" name="nbEnfants" value="4"/> 4
                                  <input type="radio" name="nbEnfants" value="+"/> +
                                  </div>

                                  <div class="col-md-12 col-sm-12">
                                        <label for="remarques">Informations générales</label>
                                        <textarea class="form-control" rows="5" id="remarques" name="remarques" placeholder="Si vos enfants ont des contraintes alimentaires, des allergies..."></textarea>
                                   </div>

                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Envoyer</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>



     
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
     //script("autocompleteVille.js");
     ?>
</body>

</html>
