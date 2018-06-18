
<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>Looking for Nounou.com - Page de connexion administrateur</title>
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
        <script src="http://localhost/nounou/js/jquery-last.js"></script>
        <script src="http://localhost/nounou/js/jquery-ui-last.js"></script>
        <!-- Styles propres aux onglets permis par jQuery -->
        <link href="health-center-master/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script>
            $(function () {
                $("#tabs").tabs();
            });
        </script>
        <link rel='stylesheet' type='text/css' href='./health-center-master/css/animate.css'> 
        <link rel='stylesheet' type='text/css' href='./health-center-master/css/bootstrap.min.css'> 
        <link rel='stylesheet' type='text/css' href='./health-center-master/css/font-awesome.min.css'> 
        <link rel='stylesheet' type='text/css' href='./health-center-master/css/owl.carousel.css'> 
        <link rel='stylesheet' type='text/css' href='./health-center-master/css/owl.theme.default.min.css'> 
        <link rel='stylesheet' type='text/css' href='./health-center-master/css/tooplate-style.css'> 

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
                        <li ><b>Admin Admin</b></li><li class="appointment-btn deconnexion"><a href="disconnect.php">Se déconnecter</a></li>                    </ul>
                </div>

            </div>
        </section>



        <!-- MAKE AN APPOINTMENT -->
        <section id="container-login data-stellar-background-ratio="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12" align='center'>
                        <div id='tabs'><ul>
                                <li><a href='#tabs-1'>Candidatures en attente de validation</a></li>
                                <li><a href='#tabs-2'>Nounous</a></li>
                                <li><a href='#tabs-3'>Nounous bloquées</a></li>
                            </ul><div id='tabs-1'>;
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th scope='col'>Photo</th>
                                            <th scope='col'>Email</th>
                                            <th scope='col'>Nom</th>
                                            <th scope='col'>Prénom</th>
                                            <th scope='col'>Date de naissance</th>
                                            <th scope='col'>Expérience</th>
                                            <th scope='col'>Présentation</th>
                                            <th scope='col'>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody><tr><th><img src='./avatars/0f0d55d5b773ce54f32e9a9ad570087f.jpg' height='100'></th><th scope='row'>jgarros@gmail.com</th><th>Garros</th><th>Jeanne</th><th>1995-01-01</th><th>fgdg</th><th>fgd'sfg</th><th><a href='admin.php?idN=1&decision=accepter'>Accepter</a> <a href='admin.php?idN=1&decision=refuser'>Refuser</a></th></tr></tbody>
                                </table>
                            </div><div id='tabs-2'>
                                <table class='table'>                                   
                                    <thead>
                                        <tr>
                                            <th scope='col'>Photo</th>
                                            <th scope='col'>Email</th>
                                            <th scope='col'>Nom</th>
                                            <th scope='col'>Prénom</th>
                                            <th scope='col'>Date de naissance</th>
                                            <th scope='col'>Expérience</th>
                                            <th scope='col'>Présentation</th>
                                            <th scope='col'>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table></div></div><div id='tabs-3'>
                            <table class='table'>                                   
                                <thead>
                                    <tr>
                                        <th scope='col'>Photo</th>
                                        <th scope='col'>Email</th>
                                        <th scope='col'>Nom</th>
                                        <th scope='col'>Prénom</th>
                                        <th scope='col'>Date de naissance</th>
                                        <th scope='col'>Expérience</th>
                                        <th scope='col'>Présentation</th>
                                        <th scope='col'>Action</th>
                                    </tr>
                                </thead>
                                <tbody><tr><th><img src='./avatars/db505117684ee9741034c6c6a2c2e2ad.png' height='100'></th><th scope='row'>g.wamp@gmail.com</th><th>Wamp</th><th>Giselle</th><th>1960-12-23</th><th>A deja garde plusieurs fois les enfants du maire</th><th>Troyenne de naissance, je vis maintenant pres de l UTT</th><th><a href='admin.php?idN=5&bloquer=undo'>Débloquer</a></th></tr></tbody>
                            </table></div></div>                    </div>
            </div>
        </section>  

        <!-- SCRIPTS -->
        <script src=./health-center-master/js/bootstrap.min.js></script>
        <script src=./health-center-master/js/jquery.sticky.js></script>
        <script src=./health-center-master/js/jquery.stellar.min.js></script>
        <script src=./health-center-master/js/wow.min.js></script>
        <script src=./health-center-master/js/smoothscroll.js></script>
        <script src=./health-center-master/js/owl.carousel.min.js></script>
        <script src=./health-center-master/js/custom.js></script>
    </body>
</html>