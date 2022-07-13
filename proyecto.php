<?php
$pg="proyecto";
?>


<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="../portfolio/images/Imagenes/android-chrome-512x512.png" type="image/x-icon">
</head>

<body id="proyecto" class="d-flex flex-column h-100">
    <header class="container">

    <?php include_once("menu.php")?>  

    </header>


    <main class="container">
        <div class="row">
            <div class="col 12 mt-2 mb-4">
                <h1>Proyectos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col 12 mt-2 mb-2">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>




        <div class="row">
            <div class="col-12 col-sm-4 p-sm-4 px-4 py-2">
                <div class="card-group">
                    <div class="col-12">
                        <img src="../portfolio/images/Imagenes/abmclientes.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-degrade">
                        <h5>AMB CLIENTES</h5>
                    </div>
                    <div class="col-12 py-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>
                     <div class="row py-5">
                        <div class="col-6">
                            <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-cod text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-12 col-sm-4 p-sm-4 px-4 py-2" >
                <div class="card-group">
                    <div class="col-12">
                        <img src="../portfolio/images/Imagenes/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-degrade">
                        <h5>GESTIÓN DE VENTAS</h5>
                    </div>
                    <div class="col-12 py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                     <div class="row py-5">
                        <div class="col-6">
                            <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-cod text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>







            <div class="col-12 col-sm-4 p-sm-4 px-4 py-2">
                <div class="card-group">
                    <div class="col-12">
                        <img src="../portfolio/images/Imagenes/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-degrade">
                        <h5>PROYECTO INTEGRADOR</h5>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML,
                            CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                       <div class="row py-5">
                        <div class="col-6">
                            <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-cod text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>






    </main>

    <footer class="container mt-auto pb-4 pt-5">
        <div class="row">
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