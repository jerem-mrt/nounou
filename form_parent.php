<?php
include 'database.php';
include 'form.php';
include 'css.php';
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


        <!-- HEADER -->
        <header>
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-5">
                        <p>Looking For Nounou</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                        <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                        <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                        <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

                </div>
            </div>
        </header>







        <!-- MAKE AN APPOINTMENT -->
        <section id="appointment" data-stellar-background-ratio="3">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <!-- FORMULAIRE D'INSCRIPTION PARENTS -->
                        <form id="appointment-form" role="form" method="post" action="form_parent_action.php" enctype="multipart/form-data">

                            <!-- SECTION TITLE -->
                            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                <h2 align="center">Postulez en tant que parent</h2>
                            </div>

                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <div class="col-md-12 col-sm-12">
                                    <?php input_text("Nom de famille", "nomP", "Votre nom"); ?>

                                </div>

                                <div class="col-md-12 col-sm-12 ui-widget">
                                    <label for="nomV">Ville</label><p></p>
                                    <input id="nomV" type="text" name="nomV" placeholder="Votre ville">
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <label for="telephoneP">N° de téléphone</label>
                                    <input type="tel" class="form-control" id="phone" name="telephoneP" placeholder="Téléphone">
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <label for="email">E-mail</label> <br />
                                    <input type="email" name='email'><br />
                                </div>
                                <div class="col-md-12 col-sm-12">
                                      <label for="password">Mot de passe</label> <br />
                                          <input type="password" name='password'><br />
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
                                    <input type="radio" name="nbEnfants" value="+"/> 5
                                </div>

                                <!--<div class="col-md-12 col-sm-12">
                                    <label for="remarques">Informations générales</label>
                                    <textarea class="form-control" rows="5" id="remarques" name="remarques" placeholder="Si vos enfants ont des contraintes alimentaires, des allergies..."></textarea>
                                </div>-->

                                <button type="submit" class="form-control" id="cf-submit" name="submit">Envoyer</button>
                            </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                        <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i> 010-070-0170</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                        <div class="latest-stories">
                            <div class="stories-image">
                                <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                            </div>
                            <div class="stories-info">
                                <a href="#"><h5>Amazing Technology</h5></a>
                                <span>March 08, 2018</span>
                            </div>
                        </div>

                        <div class="latest-stories">
                            <div class="stories-image">
                                <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                            </div>
                            <div class="stories-info">
                                <a href="#"><h5>New Healing Process</h5></a>
                                <span>February 20, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <div class="opening-hours">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                            <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                            <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                            <p>Sunday <span>Closed</span></p>
                        </div>

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2017 Your Company

                                | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-link">
                            <a href="#">Laboratory Tests</a>
                            <a href="#">Departments</a>
                            <a href="#">Insurance Policy</a>
                            <a href="#">Careers</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 text-align-center">
                        <div class="angle-up-btn">
                            <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
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
