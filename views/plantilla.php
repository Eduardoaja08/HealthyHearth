<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HEALTHEART</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <link rel="apple-touch-icon" href="views/img/icono.png">
        <link rel="shortcut icon" href="views/img/icono.png">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="views/lib/animate/animate.min.css" rel="stylesheet">
        <link href="views/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="views/lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="views/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="views/css/style.css" rel="stylesheet">
    </head>

    <body>
<?php

if (isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"] === "ok") {
    include "seccions/navbar_user.php";

    echo '<div id="right-panel" class="right-panel">';

    if (isset($_GET["ruta"])) {

        if ($_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "recommendations" ||
                $_GET["ruta"] == "cat_medicos" ||
                $_GET["ruta"] == "products" ||
                $_GET["ruta"] == "shopping" ||
                $_GET["ruta"] == "profile" ||
                $_GET["ruta"] == "agendar" ||
                $_GET["ruta"] == "profile_user"||
                $_GET["ruta"] == "salir") {
                include "moduls/" . $_GET["ruta"] . ".php";

        } 

    } else {
        include "moduls/inicio.php";
    }

    include "seccions/footer.php";

    echo "</div>";

} else {
    if (isset($_GET["ruta"])) {
    if ($_GET["ruta"] == "login") {
        include "moduls/" . $_GET["ruta"] . ".php";
    } else {
        include "seccions/navbar.php";
        echo '<div id="right-panel" class="right-panel">';
        

            if ($_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "recommendations" ||
                $_GET["ruta"] == "cat_medicos" ||
                $_GET["ruta"] == "products" ||
                $_GET["ruta"] == "perfil_usu") {
                include "moduls/" . $_GET["ruta"] . ".php";

            } 

       


        echo "</div>";
        include "seccions/footer.php";
    }
    } else {
        include "seccions/navbar.php";
        echo '<div id="right-panel" class="right-panel">';
        include "moduls/inicio.php";
        echo "</div>";
        include "seccions/footer.php";
    }

}

?>


<a href="#" class="icon-whatsapp" style="display: inline;"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="views/lib/easing/easing.min.js"></script>
        <script src="views/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="views/lib/tempusdominus/js/moment.min.js"></script>
        <script src="views/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="views/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="views/mail/jqBootstrapValidation.min.js"></script>
        <script src="Vmail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="views/js/main.js"></script>
    </body>
</html>
