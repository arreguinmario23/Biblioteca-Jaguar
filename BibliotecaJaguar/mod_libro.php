<?php
require_once 'seguridad.php';
require_once 'conexion.php';

$con = conexion();
$id = $_REQUEST["id"];
$esc=$_REQUEST["escritor"];
$edi=$_REQUEST["editorial"];
$tit=$_REQUEST["titulo"];
$pag = $_REQUEST["paginas"];
$uni = $_REQUEST["unidades"];
$cmd = $con->prepare("UPDATE libros SET escritor=:esc,editorial=:edit,titulo=:tit,paginas=:pag,unidades=:uni WHERE idlibro=:id");
$cmd->bindValue(':esc',$esc);
$cmd->bindValue(':edit',$edi);
$cmd->bindValue(':tit',$tit);
$cmd->bindValue(':pag',$pag);
$cmd->bindValue(':uni',$uni);
$cmd->bindValue(':id',$id);
$cmd->execute();

if($cmd->rowCount() > 0)
    echo json_encode(["resp"=>"si"]);
else
    echo json_encode(["resp"=>"no"]);