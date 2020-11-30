<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$op = $_GET['operacion'];

$con = conexion();
//CRUD Create Read Update Delete
switch($op){
    case "C":
        $user = $_GET["user"];
        $pass = $_GET["pass"];
        $tipo = $_GET["tipo"];
        $nombre = $_GET["nombre"];
        $cmd = $con->prepare("INSERT INTO usuarios VALUES(:u,:p,:t,:n)");
        $cmd->bindValue(':u', $user);
        $cmd->bindValue(':p', $pass);
        $cmd->bindValue(':t', $tipo);
        $cmd->bindValue(':n', $nombre);
        $cmd->execute();
        if($cmd->rowCount() > 0)
            echo json_encode(["resp"=>"si"]);
        else
            echo json_encode(["resp"=>"no"]);
    break;
    case "R":
        $id = $_GET['usuario'];
        $cmd = $con->prepare("SELECT user,tipo,nombre FROM usuarios WHERE user=:id");
        $cmd->bindValue(':id', $id);
        $cmd->setFetchMode(PDO::FETCH_ASSOC);
        $cmd->execute();
        $tabla = $cmd->fetchAll();
        echo json_encode($tabla);
    break;
    case "R2":
        $cmd = $con->prepare("SELECT user,tipo,nombre FROM usuarios");
        $cmd->setFetchMode(PDO::FETCH_ASSOC);
        $cmd->execute();
        $tabla = $cmd->fetchAll();
        echo json_encode($tabla);
    break;
    default:
    
}