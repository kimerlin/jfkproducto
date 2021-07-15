<?php     
  $id_usuario=0;
  $nombre_usuario="";
  require("conexion.php");
  session_start();
      if (isset($_SESSION['login'])) {
        $id_usuario=$_SESSION['login'];
        $email=$_SESSION['mail'];
        $nombre_usuario=$_SESSION['usuario'];
        }
        //function para cerrar seccion
  function CerrarSession(){
    if (isset($_POST['borrarSesion'])) {
      session_destroy();
      $id_usuario=0;
      $nombre_usuario="";
      header("location:index.php");
    }
   }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilos.css">  
        <style>
        .login{
            letter-spacing: 2px;
        }
        .red{
            color:white;
            font-size:20px
        }
        </style>
</head>
<body style="background:#121212">
<div class="container">
<div class="fixed">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4">
    
  
  <ul class="nav justify-content-center" >
       <li class="nav-item">
          <a id="inicio" style="color:white" class="nav-link" href="index.php">Inicio</a>
       </li>
       <li class="nav-item">
          <a id="contacto" style="color:white" class="nav-link" href="producto.php">Marcas</a>
      </li>
      <li class="nav-item">
          <a id="lista" style="color:white" class="nav-link" href="lista.php">Lista de Precio</a>
      </li>
      <li class="nav-item">
          <a id="contacto" style="color:white" class="nav-link" href="contacto.php">Contacto</a>
      </li>
  </ul>

    </div>
    
  </div>
  
  <nav class="navbar navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a style="float:left" class="navbar-brand" href="index.php"><img src="imag/logoo.png" style="width: 150px;height:60px;border-radius: 10px"><i style="margin-left:20px">JFK REPUESTO</i></a>
    
                 <a class="red" href="https://www.instagram.com/autorepuestosjfk/" target="_blank"><i class="fab fa-instagram ins"></i></a>
                 <a class="red" href="https://www.facebook.com/RepuestosJfk/" target="_blank"><i class="fab fa-facebook fac"></i></a>
                
           
    <div style="float: right">
 <?php if ($id_usuario==0): ?>
  <nav class="navbar navbar-expand-lg navbar-light login">
        <div>
           <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a style="color:white;text-decoration:none;"  href="login.php" onclick="ingresar();">Iniciar Sesion</a><span style="color:grey">|</span>
               </li>
               <li class="nav-item active">
                   <a style="color:white;text-decoration:none;" href="registrar.php" onclick="registrar();">Registrate</a>
               </li>
              
           </ul>
        </div>
    </nav>
    <?php else:?>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
            <div>
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                         <a href="#" style="color:white" class="btn  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-size:20px;color:white;" class="fas fa-user-circle"></i><?php echo "   ".$nombre_usuario ?></a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <form action="index.php" method="POST">
                             <button type="submit" class="dropdown-item" name="borrarSesion" onclick="<?php CerrarSession();?>">Cerrar Sesión</button>
                          </form>
                         </div>
                    </li> 
                    
               </ul>
           </div>
           </div>
   </nav>
    <?php endif;?>
 </div>
</nav>
  </div>
  </nav>
  <hr style="background:white;height:2px">
</div>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2be8605e79.js"></script>
<script type="text/javascript">
         function lista(){
             alert("debe Iniciar Sesión para acceder a su lista");
         }
</script>
</body>
</html>