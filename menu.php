<nav class="navbar navbar-expand-md mb-4">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1  <?php echo ($pg == "inicio")? "active": ""; ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 <?php echo ($pg == "sobre-mi")? "active": ""; ?>" href="sobre-mi.php ">Sobre mí</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-4 py-1 <?php echo ($pg == "proyecto")? "active": ""; ?>" href="proyecto.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 <?php echo ($pg == "contacto")? "active": ""; ?>" href="contacto.php">Contacto</a>
                        </li>
                     
                    </ul>
                    <div>
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fa-solid fa-download"></i></a>
                    </div>
                   
                </div>
              
            </div>

        </nav>