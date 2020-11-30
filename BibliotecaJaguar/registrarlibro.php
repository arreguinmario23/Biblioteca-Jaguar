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
    <title>BIBLIOTECA JAGUAR</title>
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
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre de Escritor</label>
                        <input type="text" class="form-control" id="escritor">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Editorial</label>
                        <input type="text" class="form-control" id="Editorial">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Titulo</label>
                        <input type="text" class="form-control" id="TituloLibro">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Paginas</label>
                        <input type="number" class="form-control" id="PaginasLibro">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Unidades</label>
                        <input type="number" class="form-control" id="CantidadLibro">
                    </div>
                    <button class="btn btn-primary" onclick="agregarLibro()">
                        <i class="material-icons align-middle">save</i>
                        Guardar
                    </button>
                </form>
            </div>
            <div class="col"></div>
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

    <div id="idtoast" class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
    <i class="material-icons align-middle">cancel</i>
      <strong class="mr-auto">Error</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      No se pudo relizar la operacion
    </div>
  </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/registrarlibro.js"></script>
</body>

</html>