<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$op = $_GET['operacion'];

$con = conexion();
//CRUD Create Read Update Delete
switch($op){
    case "C":
        $idlib = $_GET['idlib'];
        $user = $_SESSION["user"];
        $fecha = date("Y-m-d H:i:s");
        $fechadev = $_GET['dev'];
        $cmd = $con->prepare("INSERT INTO prestamos(user,idlibro,fecha_sol,fecha_reg) VALUES('$user',:id,'$fecha',:f)");
        $cmd->bindValue(':id', $idlib);
        $cmd->bindValue(':f', $fechadev);
        $cmd->execute();
        $id = $con->lastInsertId();
        if($cmd->rowCount() > 0)
            echo json_encode(["resp"=>"si","id"=>$id]);
        else
            echo json_encode(["resp"=>"no"]);
    break;
    case "R":
        $id = $_GET['pres'];
        $cmd = $con->prepare("SELECT p.num_prestamo, p.user,p.idlibro,l.titulo,p.fecha_sol,p.fecha_reg FROM prestamos p JOIN libros l WHERE p.idlibro=l.idlibro AND p.num_prestamo=:id");
        $cmd->bindValue(':id', $id);
        $cmd->setFetchMode(PDO::FETCH_ASSOC);
        $cmd->execute();
        $tabla = $cmd->fetchAll();
        echo json_encode($tabla);
    break;
    case "R2":
        $cmd = $con->prepare("SELECT p.num_prestamo, p.user,p.idlibro,l.titulo,p.fecha_sol,p.fecha_reg FROM prestamos p join libros l where p.idlibro=l.idlibro");
        $cmd->setFetchMode(PDO::FETCH_ASSOC);
        $cmd->execute();
        $tabla = $cmd->fetchAll();
        echo json_encode($tabla);
    break;
    default:
    
}