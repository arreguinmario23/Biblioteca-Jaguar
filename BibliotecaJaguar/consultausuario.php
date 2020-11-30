<?php
require_once 'seguridad.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Consultas</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark colorFondo bg-dark">
        <a class="navbar-brand" href="#">
            <i class="material-icons">book</i>
            BIBLIOTECA JAGUAR
        </a>
        <button class="navbar-toggler"  data-toggle="collapse" data-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="inicio.php">INICIO</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="registrarlibro.php">REGISTRAR LIBRO</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="consultalib.php">CONSULTAR LIBRO</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="consultausuario.php">CONSULTAR USUARIO</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="consultaPres.php">CONSULTAR PRESTAMOS</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html">SALIR</a></li>
            </ul>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header colorFondo colorTexto">
                        Buscar Usuario
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    Usuario:
                                </div>
                            </div>
                            <input type="text" name="tema" id="usuario" class="form-control" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" onclick="consulta()">
                            <i class="material-icons align-middle">find_in_page</i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="card mt-5"></div>
        <div class="row">
            <div class="col">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Tipo</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody id="tablaUsuarios">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mt-5"></div>
    <footer class="container-fluid">
        <div class="row bg-dark text-light">
            <div class="col">
                <p class="text-center">Copyright Biblioteca Jaguar (c) 2020. Todos los derechos reservados.</p>
                <p class="text-center"><a href="mailto:">JaguaresUnidos</a></p>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ConsultaUsuarios.js"></script>

</body>
</html>