<?php
require("conexion.php");
 if (isset($_GET['id_producto'])) {
    $id=$_GET['id_producto'];
    $delete= mysqli_query($conexion,"delete from producto where id_producto='$id'");
    header("location:producto.php?eliminada=1");
}
?>