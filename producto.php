<!DOCTYPE html>
<html>

<head>
   <title>Productos</title>
</head>

<body>
   <?php
   require("menu.php");
   require("conexion.php");
   ?>
   <br>
   <div class="container">
      <div class="row">
         <?php
         //valida que el que carga el producto sea el administrador
         $sql = mysqli_query($conexion, "SELECT * FROM producto");
         $prodporpag = 12;
         $totalpaginas = mysqli_num_rows($sql);
         $pag = $totalpaginas / $prodporpag ;
         $pag = ceil($pag);
         if (isset($_SESSION['login'])) {
            $idUser = $_SESSION['login'];
            $permiso = $_SESSION['mail'];
            if ($permiso == "admin@gmail.com") {
         ?>
               <div id="np" class="col-md-12" style="padding-top: 30px">
                  <ul class="nav justify-content-center">
                     <li class="nav-item">
                        <a id="nuevoProducto" class="btn btn-primary" href="alta.php"><i class="far fa-arrow-alt-circle-up"></i> cargar producto</a>
                     </li>
                  </ul>
               </div>
            <?php
            }
         }
         if (isset($_GET['producto'])) {

            $paginacion = ($_GET['producto'] - 1) * $prodporpag ;
            $sqlpag = mysqli_query($conexion, "SELECT * FROM producto limit $paginacion,$prodporpag ");

            while ($r = mysqli_fetch_array($sqlpag)) {
            ?>
               <div align="center" class="col-md-4" style="padding:1%;">
                  <div class="contenedor">
                     <a href="infoproducto.php?id_producto=<?php echo $r['id_producto']; ?>"><img src="<?php echo $r['imagen']; ?>" style="width:250px;height:300px"></a>

                     <br>
                     <?php
                     if (isset($_SESSION['login'])) {
                        if ($permiso == "admin@gmail.com") { ?>
                           <div style="background:#212121;width:250px;">
                           <form method="GET" action="modificar.php">
                                 <button style="float: left;border-radius:30px" type="submit" name="id_producto" value="<?php echo $r['id_producto']; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                                 <a style="border-radius:30px" class="btn btn-primary" href="eliminar.php?id_producto=<?php echo $r['id_producto'];?>"><i class="fas fa-trash-alt"></i></a>
                           </form>
                           </div>
                     <?php
                        }
                     }
                     ?>
                  </div>
               </div>
            <?php } ?>
            <div class="container" style="padding-top:40pz">
               <nav arial-label="page navigation">
                  <ul class="pagination justify-content-center">
                     <li class="page-item <?php echo $_GET['producto'] <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="producto.php?producto=<?php echo $_GET['producto'] - 1 ?>">Anterior</a></li>
                     <?php for ($i = 1; $i <= $pag; $i++) : ?>
                        <li class="page-item <?php echo $_GET['producto'] == $i ? 'active' : '' ?>"><a class="page-link" href="producto.php?producto=<?php echo $i ?>"><?php echo $i ?></a></li>
                     <?php endfor ?>
                     <li class="page-item <?php echo $_GET['producto'] >= $pag ? 'disabled' : '' ?>"><a class="page-link" href="producto.php?producto=<?php echo $_GET['producto'] + 1 ?>">Siguiente</a></li>
                  </ul>
               </nav>
            </div>
            <?php
         } else {
            $consulta = mysqli_query($conexion, "SELECT * FROM producto limit $prodporpag");
            while ($r = mysqli_fetch_array($consulta)) {
            ?>

               <div align="center" class="col-md-4" style="padding:1%;">
                  <div class="contenedor">
                     <a href=#><img src="<?php echo $r['imagen']; ?>" style="width:250px;height:300px"></a>
                     <br>
                     <?php
                     if (isset($_SESSION['login'])) {
                        if ($permiso == "admin@gmail.com") { ?>
                           <div style="background:#212121;width:250px;">
                              <form method="GET" action="modificar.php">
                                 <button style="float: left;border-radius:30px" type="submit" name="id_producto" value="<?php echo $r['id_producto']; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                                 <a style="border-radius:30px" class="btn btn-primary" href="eliminar.php?id_producto=<?php echo $r['id_producto']; ?>"><i class="fas fa-trash-alt"></i></a>
                              </form>


                           </div>
                     <?php
                        }
                     }
                     ?>
                  </div>
               </div>
            <?php } ?>
            <div class="container" style="padding-top:40pz">
               <nav arial-label="page navigation">
                  <ul class="pagination justify-content-center">
                     <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                     <li class="page-item active"><a class="page-link" href="producto.php?producto=1">1</a></li>
                     <?php for ($i = 2; $i <= $pag; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="producto.php?prodcto=<?php echo $i ?>"><?php echo $i ?></a></li>
                     <?php endfor ?>
                     <li class="page-item"><a class="page-link" href="producto.php?producto=2">Siguiente</a></li>
                  </ul>
               </nav>
            </div>
      </div>
   </div>
<?php
         }
         if (isset($_GET['eliminada']) && $_GET['eliminada'] == 1) {
            echo "<script>alert('producto eliminado');</script>";
         }
?>
<script>
   function stock() {
      alert("el producto se encuentra sin stock");
   }
</script>
</body>

</html>