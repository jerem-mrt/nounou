<?php
        session_start();
        require_once 'database.php';
        require_once 'form.php';
        require_once 'css.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>

     <title>Looking for Nounou.com - Inscription</title>
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
    <section id="container" - login data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                   <div class="col-md-12 col-sm-12" align='center'>
                       <div class="col-md-12 col-sm-12">
                       <h2>Devenir membre de Looking For Nounou</h2>
                       </div>
                       
                       <div class="col-md-12 col-sm-12">
                           <h5>Avant de vous connecter, merci de nous préciser si vous voulez ...</h5>
                       </div>
                    
                    <div class="col-md-6 col-sm-6">
                      <h3><a href="form_parent.php">Vous inscrire en tant que parent ?</a></h3>   
                           <i><div class="stories-image">
                                   <a href="form_parent.php"><img src="avatars/icones/parent_icon.png" class="img-responsive" alt=""></a>
                            </div></i>
                   </div>
                   
                   <div class="col-md-6 col-sm-6">
                       <h3><a href="form_nounou.php">Vous inscrire en tant que nounou ?</a></h3>  
                       <i><div class="stories-image">
                                   <a href="form_nounou.php"><img src="avatars/icones/nounou_icon.png" class="img-responsive" alt=""></a>
                            </div></i>
                   </div>
                       
                  
                   </form>
                   </div>
               </div>
          </div>
     </section>        


     

     <!-- SCRIPTS -->
     <?php 
     include 'footer.php';
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