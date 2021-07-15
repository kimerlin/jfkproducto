<?php 
require("conexion.php");
$idproducto=$_POST['id_producto'];
$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$modificar=mysqli_query($conexion,"UPDATE producto SET titulo='$titulo',descripcion='$descripcion',imagen='$imagen' WHERE id_producto='$idproducto'")or die("error al actualizar");
header("location:modificar.php?id_producto=$idproducto&mod=1");
?>