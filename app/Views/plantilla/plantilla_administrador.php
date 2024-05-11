<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador - Panel</title>
        <script src="https://unpkg.com/feather-icons"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-warning min-vh-100">
                        <h3>
                            <img src="../logos_LIEE/LIEE_Logo.png" alt="img" class="img-fluid">LIEE
                        </h3>
                        <a class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-light text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline text-warning">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="vista_administrador" class="nav-link text-warning align-middle px-0" >
                                    <i data-feather="home"></i> <span class="ms-1 d-none d-sm-inline">Principal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#menu_cruds" data-bs-toggle="collapse" class="nav-link text-warning px-0 align-middle">
                                    <i data-feather="database"></i> <span class="ms-1 d-none d-sm-inline">CRUD</span>
                                </a>
                                <ul class=" show nav flex-column ms-1" id="menu_cruds" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="vista_administrador_cruds_clientes" class="nav-link text-warning px-0"> <i data-feather="book"></i> <span class="d-none d-sm-inline">Clientes</span></a>
                                    </li>
                                    <li>
                                        <a href="vista_administrador_cruds_usuarios" class="nav-link text-warning px-0"> <i data-feather="users"></i> <span class="d-none d-sm-inline">Usuarios</span></a>
                                    </li>
                                    <li>
                                        <a href="vista_administrador_cruds_documentos" class="nav-link text-warning px-0"> <i data-feather="file"></i> <span class="d-none d-sm-inline">Documentos</span></a>
                                    </li>
                                    <li>
                                        <a href="vista_administrador_cruds_ensayos" class="nav-link text-warning px-0"> <i data-feather="bookmark"></i> <span class="d-none d-sm-inline">Ensayos</span></a>
                                    </li>
                                </ul>
                            <li>
                            <li>
                                <a href="vista_administrador_servicios" class="nav-link text-warning px-0"> <i data-feather="sidebar"></i> <span class="d-none d-sm-inline">Servicios</span></a>
                            </li>
                            <li>
                                <a href="vista_administrador_solicitudes" class="nav-link text-warning px-0"> <i data-feather="book-open"></i> <span class="d-none d-sm-inline">Solicitudes</span></a>
                            </li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li>
                                <a class="nav-link text-warning px-0" href="<?php echo base_url(); ?>LoginController/logOut">
                                    <i data-feather="log-out"></i> Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                        </ul>  
                    </div>
                </div>
                <div class="column py-3">
                    <div class="row bg-warning">
                        <h3>
                            <img src="../logos_LIEE/LIEE_Logo.png" alt="img" class="img-fluid">LIEE
                        </h3>
                    </div>
                    <?php
                        echo $this->renderSection('vista_administrador');
                    ?>
                </div>
            </div>
        </div>
        <script>
            feather.replace();
        </script>
    </body>
</html>