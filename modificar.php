
<?php 
      require ("conexion.php");
      
   if (isset($_GET['id_producto'])) {
      $idproducto=$_GET['id_producto'];
      
      $consulta="SELECT * FROM producto where id_producto=$idproducto;";
      $resultado=mysqli_query($conexion,$consulta);
      while ($rs=mysqli_fetch_array($resultado)) {
         $id=$rs['id_producto'];
         $titulo=$rs['titulo'];
         $descripcion=$rs['descripcion'];
         $imagen=$rs['imagen'];

      }
    }
	?>
<!DOCTYPE html>
 <html>
   <head>
    <title>Modificar Productos</title> 
   </head>
   <body>
   <?php require ("menu.php");?>

    <div class="container">
		<div class="row">
            <div align="center" class="col-md-12">
   
    <form method="POST" action="mod.php" style="width:50%;color:white">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Titulo</label>
      <input type="text" class="form-control" name="id_producto" id="id_producto" value="<?php echo $id;?>" hidden>
      <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $titulo;?>" required placeholder="ingrese nombre del producto">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">imagen</label>
      <input type="text" class="form-control" name="imagen" id="imagen" value="<?php echo $imagen;?>" required placeholder="ingrese link de la imagen">
    </div>
  </div>>
  <div class="form-group">
   
    <label for="inputEmail4">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $descripcion;?>" required>
    
  </div>
  <button type="submit" class="btn btn-dark">Modificar</button>
</form>
</div>
</div>
</div>
       
       
<?php 

  if(isset($_GET['mod']) && $_GET['mod']==1){
        echo "<script>alert('se modifico con exito');</script>";
      }
    
?>

        
		
   </body>
</html>
