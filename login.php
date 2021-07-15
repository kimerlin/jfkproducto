<!DOCTYPE html>
<html>
    <head>
       <title>Login</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body style="background:#121212">
        <div class="container">
          <div class="row">
            <div class="col-md-12" align="center" style="padding-top:10px;">
                <a href="index.php"><img src="imag/logoo.png" style="width:200px;height:100px;border-radius:20px"></a>
            </div>
            <div class="col-md-12" align="center" style="padding-top:100px">
                <div>
                    <div class="col-md-6 logoUser" style="background:#e8ead3;padding:20px">
                         <form  action="login.php?pagina=1" method="POST">
                           <div class="form-group" id="user-group">
                             <label style="float:left" for="user">Usuario</label>
                             <input type="text" class="form-control" name="usuario" id="usuario"  placeholder="ingrese su e-mail">
                           </div>
                           <div class="form-group" id="password-group">
                         <label style="float:left" for="contra">Contraseña</label>
                         <input type="password" class="form-control" name="contra" id="contra" placeholder="ingrese su contraseña">
                       </div>
                       <div class="form-group">
                             <button type="submit" class="btn btn-dark">Ingresar</button>
                           </div>
                         </form>
                 </div>  
            </div>
          </div>
            
            </div>
          </div>
          <?php if (isset($_GET['pagina'])&& $_GET['pagina']==1) {
	           	
                session_start();
                require("conexion.php");
                    $usuario=$_POST['usuario'];
                    $password=$_POST['contra'];
                        $consulta= mysqli_query($conexion,"SELECT * FROM usuarios where email='$usuario' and contrasenia='$password'"); 
                        if($p=mysqli_fetch_assoc($consulta)){
                              if ($p['email']==$usuario && $p['contrasenia']==$password) {
                                $id=$p['id_usuario'];
                                  $_SESSION['login']=$p['id_usuario'];
                                  $_SESSION['mail']=$p['email'];
                                  $_SESSION['usuario']=$p['nombre'];
                                  header("location:index.php?usuario=$id");
                              }
                        }else{
                            header("location:login.php?pagina=2");
                        }
                    
             
	
            }
            if (isset($_GET['pagina'])&& $_GET['pagina']==2) {
                 echo "<script>alert('usuario o contraseña incorrectos');</script>";
            }?>
          <div style="padding-top:100px;color: white;">
         <footer>
                  <div align="center">
                     <h3><strong>JFK REPUESTO</strong></h3>
                 </div>   
         </footer>
       </div>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/2be8605e79.js"></script>
    </body>
</html>