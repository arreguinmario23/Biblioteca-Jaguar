<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();

$cmd = $con->prepare("SELECT idlibro,escritor,editorial,titulo,paginas,unidades FROM libros");
$cmd->setFetchMode(PDO::FETCH_ASSOC);
$cmd->execute();
$tabla = $cmd->fetchAll();
echo json_encode($tabla);