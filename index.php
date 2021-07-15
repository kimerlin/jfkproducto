
<!DOCTYPE html>
<html>
<head>
    <title>Jfk Autorepuesto</title>
</head>
<body>
   <?php 
      require("menu.php");
      require("conexion.php");   
      $consulta=mysqli_query($conexion,"SELECT * FROM producto");
      $total_productos=mysqli_num_rows($consulta);?>
    <br><br>
   
    <div align="center"><h2 style="color:white">MARCAS</h2></div>
    <br>
    <div class="container">
 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php for($i=0;$i<$total_productos;$i++){ $active="active";?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" class="<? echo $active;?>"></li>
  <?php
     $active="";
  }
   ?>
  </ol>
  <div class="carousel-inner">
  <?php $active="active";
     while ($r=mysqli_fetch_array($consulta)) {
  ?>
  <div align="center" class="carousel-item <?php echo $active;?>">
      <img src="<?php echo $r['imagen'];?>" style="width:400px;height:400px">
    </div>
    <?php 
    $active="";
  }
  ?>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span style="color:black" class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div style="padding-top:100px;color: white;">
         <footer>
                  <div align="center">
                     <h3><strong>JFK REPUESTO</strong></h3>
                 </div>   
         </footer>
 </div>       
</body>
</html>