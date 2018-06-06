<?php
        include 'database.php';
?><!DOCTYPE html>
<html lang="en">
         
        
<head>

     <title>Looking For Nounou</title>

     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css" />


</head>
<body>
     <!-- inclusion des libraries jQuery et jQuery UI (fichier principal et plugins) -->
        <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>

<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


     <!-- MAKE AN APPOINTMENT -->
     <section>

    <form id="appointment-form" role="form" method="post" action="form_parent_action.php" enctype="multipart/form-data">
        <h2 align="center">Postulez en tant que parent</h2>


      
        <div class="ui-widget">  
            <label for="nomV">Ville</label>
            <input id="nomV">
        </div>
        
        <button type="submit" class="form-control" id="cf-submit" name="submit">Envoyer</button>
   </form>


     </section>

        <script>
         $(function(){
             $("#nomV").autocomplete({
                 source: 'rechercheVille.php',
                 minLength : 2 // on indique qu'il faut taper au moins 3 caractères pour afficher l'autocomplétion
              
             });
         });
         </script>
</body>
</html>
