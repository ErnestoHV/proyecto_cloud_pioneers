<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador - Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <h3>Hello, world!</h3>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-warning min-vh-100">
                        <a class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-light text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="vista_administrador" class="nav-link text-warning align-middle px-0" >
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Principal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link text-warning px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">CRUD</span>
                                </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="vista_administrador_cruds_clientes" class="nav-link text-warning px-0"> <span class="d-none d-sm-inline">Clientes</span></a>
                                    </li>
                                    <li>
                                        <a href="vista_administrador_cruds_usuarios" class="nav-link text-warning px-0"> <span class="d-none d-sm-inline">Usuarios</span></a>
                                    </li>
                                </ul>
                            <li>
                            <li>
                                    <a href="vista_administrador_procesos" class="nav-link text-warning px-0"> <span class="d-none d-sm-inline">Procesos</span></a>
                            </li>
                        </ul>
                    </li>
                        </ul>
                    </div>
                </div>
                <div class="column py-3">
                    Contenido...
                    <?php
                        echo $this->renderSection('vista_administrador');
                    ?>
                </div>
            </div>
        </div>
        <footer>
            Este es un footer
        </footer>
    </body>
</html>