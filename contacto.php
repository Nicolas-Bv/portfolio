<?php
$pg="contacto";


if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    // Varios destinatarios
    $para = "nicolas.bv@outlook.com";
    $titulo = 'Recibiste un mensaje desde tu Web';

    // mensaje
    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: nicolas.bv@outlook.com' . "\r\n";
    $cabeceras .= 'From: contacto@nicolasmorgan.com.ar' . "\r\n";

    // Enviarlo
    //mail($para, $titulo, $cuerpo, $cabeceras);
    header("Location: confirmacion_envio.php");
}


?>
 

<!DOCTYPE html>
<html lang="es" class="h-100">

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

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">

       <?php include_once("menu.php")?>  

     </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-4">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Email"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu mensaje"
                            class="form-control"></textarea>
                    </div>

                    <div class="">
                        <button type="submit" name="bntEnviar" id="btnEnviar" class="btn"> ENVIAR</button>

                    </div>

                </form>
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