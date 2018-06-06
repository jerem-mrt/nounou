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


    <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
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
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Aenean luctus lobortis tellus</h3>
                                             <h1>New Lifestyle</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Pellentesque nec libero nisi</h3>
                                             <h1>Your Health Benefits</h1>
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
<script type="text/javascript">
$(document).ready(function(){
	var MAX_FIELDS = 10;
	var fields = 1;
	
	$(":input[name='add']").click(function () {
		if (fields <= MAX_FIELDS) {
			$("div[id='creneau']:last").clone(true).insertAfter("div[id='creneau']:last");
			fields++;
		}
	});
});

function caseACocher(caseACocher){
if (caseACocher.checked){
 document.getElementById("saisieDispoRecurrente").className = "display";
}
else {
    document.getElementById("saisieDispoRecurrente").className = "hidden";
    document.getElementById("case_a_cocher_Jours").className = "hidden";
}
}
</script>

<form id="appointment-form" role="form" method="post" action="form_nounou_disponibilite_action.php" enctype="multipart/form-data">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2 align="center">Ajoutez vos disponibilités</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-12 col-sm-12">
                                       <div class="form-check">
                                           <input class="form-check-input" type="checkbox" name="dispoRecurrente" id="dispoRecurrente" onclick="caseACocher(this)">
                                             <label class="form-check-label" for="dispoRecurrente">
                                             <h4>Ajoutez une disponibilité récurrente</h4>
                                             </label>
                                         </div>
                                       
                                       <div id="saisieDispoRecurrente" class="hidden">
                                       Je suis libre
                                       <select name='recurrence'id="frequence" class="custom-select"> 
                                           <?php select_option(['tous les jours', 'tous les jours travaillés', 'tous les lundis ou mardis etc']); ?>
                                       </select>
                                       </div>
                                       <div id="case_a_cocher_Jours" class="hidden">
                                          <div class="form-check">
                                             <input class="form-check-input" name="joursDispo[]" type="checkbox" value="lundis" id="lundis">
                                             <label class="form-check-label" for="lundis">
                                             Lundis
                                             </label>
                                         </div>
                                       
                                         <div class="form-check">
                                            <input class="form-check-input" name="joursDispo[]" type="checkbox" value="mardis" id="mardis">
                                            <label class="form-check-label" for="mardis">
      Mardis
  </label>
</div>
                                       
                                       <div class="form-check">
  <input class="form-check-input" name="joursDispo[]" type="checkbox" value="mercredis" id="mercredis">
  <label class="form-check-label" for="mercredis">
    Mercredis
  </label>
</div>
                                       
                                       <div class="form-check">
  <input class="form-check-input" name="joursDispo[]" type="checkbox" value="jeudis" id="jeudis">
  <label class="form-check-label" for="jeudis">
    Jeudis
  </label>
</div>
                        
                                       <div class="form-check">
  <input class="form-check-input" name="joursDispo[]" type="checkbox" value="vendredis" id="vendredis">
  <label class="form-check-label" for="vendredis">
    Vendredis
  </label>
</div>
                                       
                                       <div class="form-check">
  <input class="form-check-input" name="joursDispo[]" type="checkbox" value="samedis" id="samedis">
  <label class="form-check-label" for="samedis">
    Samedis
  </label>
</div>
                                       <div class="form-check">
  <input class="form-check-input" name="joursDispo[]" type="checkbox" value="dimanches" id="dimanches">
  <label class="form-check-label" for="dimanches">
    Dimanches
  </label>
</div>
                                           </div>
                                       
                                       <script>
                                           
                                           
    $("#frequence").change(function () {
          var str = "";
          $("#frequence option:selected").each(function () {
                str += $(this).val();
              });
           
          if(str === 'tous-les-lundis-ou-mardis-etc'){
                $("#case_a_cocher_Jours").removeClass('hidden').addClass('display');
          }
          else{
              $("#case_a_cocher_Jours").removeClass('display').addClass('hidden');
          }
        })
        .change();

    // Fonction permettant d'ajouter un champ
$(document).ready(function(){
	var MAX_FIELDS = 15;
	var fields = 1;
	
	$("#add").click(function () {
		if (fields <= MAX_FIELDS) {
			$("div[id='creneau']:last").clone(true).insertAfter("div[id='creneau']:last");
			fields++;
		}
	});
});
                                       </script> 
                                       
                              
                                   </div>
                                        
                                   
                                   <div class="col-md-12 col-sm-12">
                                        <h4>Ajouter une disponibilité ponctuelle</h4>
                                        <div id="creneau">
                                            <!-- Je suis disponible le <input type="date" name="dateDispoPonctuelle[]"> de <input type="time" name="dateDispoHeureD[]"> à <input type="time" name="dateDispoHeureF[]">. -->
                                            Je suis disponible le <input type="date" name="dispo[date][]"> de <input type="time" name="dispo[heureD][]"> à <input type="time" name="dispo[heureF][]">.
                                        <img id="add" src="./img/plus.png" height="15"></div>
                                        
                                  
        
                                   </div><br>
                                  
                                  <div class="col-md-12 col-sm-12">
                                  <input type="Submit" value="Enregistrer mes disponibilités">
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
     script ("jquery.sticky.js");
     script ("jquery.stellar.min.js");
     script ("wow.min.js");
     script ("smoothscroll.js");
     script ("owl.carousel.min.js");
     script ("custom.js");
     ?>
</body>
</html>