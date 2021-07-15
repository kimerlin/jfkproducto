<!DOCTYPE html>
<html>
    <head>
        <title>Contactanos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <style>
            .logoUser form label{
                 float:left;
            }
        </style>
    </head>
    <body style="background-color: #212121;">
        <div class="container">
            <div class="row">
               <div class="col-md-12" align="center" style="padding-top:10px;">
               <a style="color:white" class="navbar-brand" href="index.php"><img src="imag/logoo.png" style="width: 150px;height:60px;border-radius: 10px"><i style="margin-left:20px">JFK REPUESTOS</i></a>
              </div>
                <div class="col-md-12" align="center" style="padding-top:60px">
                        <div class="col-md-8 logoUser" style="background:#e8ead3">
                             <form  method="POST" action="">
                                <h4>Contactanos</h4><br>
                                <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                         <label>Nombre</label>
                                         <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="ingrese su nombre">
                                      </div>
                                      
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                         <label>E-mail</label>
                                         <input type="text" class="form-control" name="mail" id="mail" placeholder="ingrese su e-mail" onkeyup="validarMail()">
                                      </div>
                                      <div class="form-group">
                                         <label>Mensaje</label>
                                         <input type="text" class="form-control" name="contr" id="contr" placeholder="ingrese su mensaje">
                                      </div>
                                    </div>
                  
                                    <br><br>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                           <SCRIPT languaje="JavaScript">
                                            function pulsar() {
                                             alert("Gracias, su mensaje a sido enviado!");
                                             }
                                            </SCRIPT>
                                            <button name="contacto" value="contacto" id="btnContacto" class="btn btn-dark" onclick="pulsar()">Enviar</button>
              
                                       </div>
                                    </div>
                                </div>
                             </form>
                        </div>
                </div>
            </div>
        </div>
        </body>
        </html>