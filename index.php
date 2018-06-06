<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        include 'database.php';
        include 'form.php';
        include 'css.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de candidature pour devenir nounou</title>
        <?php 
        stylesheet("animate.css");
        stylesheet("bootstrap.min.css");
        stylesheet("font-awesome.min.css");
        stylesheet("owl.carousel.css");
        stylesheet("owl.theme.default.min.css");
        stylesheet("tooplate-style.css");
        ?>
    </head>
    <body>
        
        <form action ='action.php' method="post">
            <fieldset>
                <legend>Identité</legend>
               <?php
        input_text("Nom", "nom");
        input_text("Prénom", 'prenom');
        
        ?>
                
                
                
                <label>Date de naissance</label>
                <input type="date" name="anniversaire"><br/>
                
            </fieldset>
            
            <fieldset>
            <legend>Informations de contact</legend>
            <label>Portable</label>
            <input type="tel" name="telephone"> <br/>
            
            <label>Email</label>
            <input type="email" name='email'><br />
                            
            </fieldset>
            
            <fieldset>
                <legend>Dîtes-nous en un peu plus sur vous</legend>
                <?php 
                input_text("Expérience", "experience");
                
                
                input_text("Présentez-vous en quelques mots", "presentation");
                ?>
                
                <input type="submit" value="Envoyer ma candidature">
        </form>
        
    </body>
</html>
