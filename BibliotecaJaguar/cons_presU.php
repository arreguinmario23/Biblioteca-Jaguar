<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();

$user=$_SESSION["user"];
$cmd = $con->prepare("SELECT num_prestamo,idlibro,fecha_sol,fecha_reg FROM prestamos where user='$user'");
$cmd->setFetchMode(PDO::FETCH_ASSOC);
$cmd->execute();
$tabla = $cmd->fetchAll();
echo json_encode($tabla);