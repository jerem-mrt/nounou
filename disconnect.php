<html>
    <head>
        <title>LookingForNounou - Déconnexion</title>
        <script type="text/javascript">
            function RedirectionJavascript() {
                document.location.href = "http://localhost/nounou";
            }
        </script>
    </head>
    <body onload="setTimeout('RedirectionJavascript()', 2000)">
        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        if (isset($_SESSION)) {
            $_SESSION = array();

            (session_destroy());

            echo "Vous avez bien été déconnecté, vous allez être redirigé vers la page d'accueil.";
        }
        ?>
    </body>
</html>


