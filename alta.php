<?php 
      require ("conexion.php");
	?>
<!DOCTYPE html>
 <html>
   <head>
    <title>Alta Marcas</title> 
   </head>
   <body>
   <?php require ("menu.php");?>

    <div class="container">
		<div class="row">
            <div align="center" class="col-md-12">
   
    <form method="POST" action="alta.php?alta=1" style="width:50%;color:white">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Titulo</label>
      <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="ingrese nombre de la marca">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">imagen</label>
      <input type="file" class="form-control" name="imagen" id="imagen" required placeholder="ingrese link de la imagen">
    </div>
  </div>
  
  <div class="form-group">
   
    <label for="inputEmail4">Descripcion</label>
    <textarea type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="ingrese una descripcion"></textarea>
    
  </div>
  <button type="submit" class="btn btn-dark" name="guardar" value="guardar">Cargar</button>
</form>
</div>
</div>
</div>
<!-- para dar de alta a un nuevo producto-->
<?php if (isset($_GET['alta'])&& $_GET['alta']==1){
           require("conexion.php");
           $titulo=$_POST['titulo'];
           $imagen=$_POST['imagen'];
           $descripcion=$_POST['descripcion'];
           $Insert=mysqli_query($conexion,"INSERT INTO producto values (00,'$titulo','$descripcion','$imagen')");
           echo "<script>alert('producto agregado');</script>";
	
      }
 ?>
        
		
   </body>
</html>