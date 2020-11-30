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
    <title>BIBLIOTECA JAGUAR - Consultas</title>
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
                <li class="nav-item"><a class="nav-link" href="consultaLib.php">CONSULTAR LIBRO</a></li>
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
    
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand">Buscar Libro</a>

        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="material-icons align-middle">search</i></button>
        </form>
      </nav>

      <div class="container">
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Escritor</th>
                            <th>Editorial</th>
                            <th>Titulo</th>
                            <th>Número de Paginas</th>
                            <th>Cantidad Disponible</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody id="tablaLibros">
                        <tr>
                            <td>1405</td>
                            <td>Carlos Cuauhtémoc Sánchez</td>
                            <td>Diamante</td>
                            <td>Los Ojos de mi Princesa</td>
                            <td>304</td>
                            <td>50</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modificaTema">
                                    <i class="material-icons align-middle">edit</i>
                                </button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#eliminaTema">
                                    <i class="material-icons align-middle">cancel</i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Es una ventana modal para editar -->
    <div class="modal fade" id="modificaLibro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Libro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Escritor:
                        </div>
                    </div>
                    <input type="text" name="temaEditar" id="escritorEditar" 
                    class="form-control" placeholder="Nombre de Escritor">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Editorial:
                        </div>
                    </div>
                    <input type="text" name="temaEditar" id="editorialEditar" 
                    class="form-control" placeholder="Nombre de Editorial">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Libro:
                        </div>
                    </div>
                    <input type="text" name="temaEditar" id="libroEditar" 
                    class="form-control" placeholder="Nombre de libro">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Paginas:
                        </div>
                    </div>
                    <input type="text" name="temaEditar" id="paginasEditar" 
                    class="form-control" placeholder="Numero de paginas">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Unidades:
                        </div>
                    </div>
                    <input type="text" name="temaEditar" id="uniEditar" 
                    class="form-control" placeholder="Unidades de libro">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" onclick="guardaCambios()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
          </div>
        </div>
      </div>

<!-- Es una ventana modal para eliminar -->
<div class="modal fade" id="eliminaTema" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Tema</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>¿esta seguro de eliminar el libro? Se eliminara todo lo relacionado.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="button" onclick="confirmaEliminar()" class="btn btn-primary" data-dismiss="modal">Si</button>
        </div>
      </div>
    </div>
  </div>

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
    <script src="js/registrarlibro.js"></script>
</body>
</html>