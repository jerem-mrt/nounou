<?php
require_once 'database.php';
require_once 'form.php';
require_once 'css.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>Looking for Nounou.com - Nounou : saisissez vos disponibilités</title>
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
        <script src="http://localhost/nounou/health-center-master/js/jquery.js"></script>
        <script src="http://localhost/nounou/health-center-master/js/momentjs.js"></script>
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
        <section id="container-login data-stellar-background-ratio="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 col-sm-12" align='center'>
                        <form class="form-signin" id="login" method="post" action="connexion.php">
                            <h3>Espace membre nounou</h3><br><br>
                            <label for="inputEmail">Email</label> <br>
                            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus><br>

                            <label for="inputPassword">Mot de passe</label>
                            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                            
                                    
                                    <input type="hidden" name="role" value="nounou">
                                
                           
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>

                        </form>
                    </div>
                    <div class="col-md-3"></div>
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
    </body>
</html>