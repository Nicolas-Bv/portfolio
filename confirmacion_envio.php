<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$pg="contacto"
?>

<!DOCTYPE html>
<html lang="es"class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="../portfolio/images/Imagenes/android-chrome-512x512.png" type="image/x-icon">
</head>
<body id="confirmacion" class="d-flex flex-column h-100">
    <header class="container">

       <?php include_once("menu.php")?>  

     </header>">

<main class="container">
    <div class="row">
        <div class="col-sm-6 col-12">
            <h1>Gracias por contactarte!</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-12">
            <h4>El mensaje será respondido a la brevedad.</h4>
        </div>
    </div>
</main>
    

<footer class="container mt-auto pb-4">
        <div class="class row">
            <div class="col-12 col-sm-3 text-center">
                <a href="https://github.com/Nicolas-Bv" target="_blank" title="github"> <i
                        class="fa-brands fa-github"></i></a>
                <a href="http://linkedin.com/in/nicolas-morgan-bv" target="_blank" title="linkein"><i
                        class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center">
                Sponsor <a href="https://depcsuite.com/">DePCSuite</a>
            </div>
            <div class="col-12 col-sm-3 text-center">
                <a href="mailto:Nicolas.bv@outlook.com">Nicolas.bv@outlook.com</a>
            </div>
        </div>
    </footer>
    <div class="whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
    </div>


</body>
</html>