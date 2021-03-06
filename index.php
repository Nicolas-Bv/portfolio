<?php
$pg="inicio";
?>


<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="../portfolio/images/Imagenes/android-chrome-512x512.png" type="image/x-icon">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">

    <?php include_once("menu.php")?>  

    </header>


    <main class="container">
     <div class="row">
       <div class="col-12 mx-auto text-center pb-5 img-co">
          <a href="../portfolio/proyecto.php"><img src="../portfolio/images/Imagenes/cohete.svg" class="cohete"></a>
       </div>

      <div class="col-sm-6 col-12 offset-sm-3 text-center">
        <div class="bienvenidx my-4"><p > Bienvenid@ a mi sitio web sobre sistemas.</p></div>
      </div>


      <div class="col-12 text-center pt-2 pb-5">

       <a href="../portfolio/proyecto.php" class="btn shadow">Conoce mis proyectos</a>
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