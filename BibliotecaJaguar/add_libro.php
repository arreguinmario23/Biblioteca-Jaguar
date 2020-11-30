<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();
$esc=$_REQUEST["escritor"];
$edi=$_REQUEST["editorial"];
$tit=$_REQUEST["titulo"];
$pag = $_REQUEST["paginas"];
$uni = $_REQUEST["unidades"];
$cmd = $con->prepare("INSERT INTO libros (escritor,editorial,titulo,paginas,unidades) VALUES (:esc,:edit,:tit,:pag,:uni)");
$cmd->bindValue(':esc',$esc);
$cmd->bindValue(':edit',$edi);
$cmd->bindValue(':tit',$tit);
$cmd->bindValue(':pag',$pag);
$cmd->bindValue(':uni',$uni);
$cmd->execute();
$id = $con->lastInsertId();
if($cmd->rowCount() > 0)
    echo json_encode(["resp"=>"si","id"=>$id]);
else
    echo json_encode(["resp"=>"no"]);