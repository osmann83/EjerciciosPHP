<?php
require "clases/Pruebaconexion.php";
extract($_REQUEST);

if(!isset($_REQUEST['valse']))
   $valse=0;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Acceso a la Aplicación<br> Pagina de inicio</h2>
            <p>Ingresa o Registrate para tener acceso</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="clases/validarInicioSesion.php" autocomplete="off">
                  <div class="mb-3 mt-3">
                     <label for="nombre">Nombre de Usuario</label>
                     <input type="text" class="form-control" placeholder="Nombre de Usuario" name="login" autofocus require>
                  </div>
                  <div class="mb-3 mt-3">
                     <label>Contraseña</label>
                     <input type="password" class="form-control" placeholder="Password" name="password" require>
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
               </form>
               
            </div>
         </div>
      </div>
      <?php
                  switch($valse)
                  {
                     case 1:
      ?>                  
                        <script>window.alert('Usuario no registrado con los datos ingresados, vuelva a intentar');</script>
      <?php
                        break;
                     case 2:      
      ?>                  
                        <script>window.alert('Debe iniciar sesión para poder ingresar a la aplicación');</script>
      <?php
                        break;
                     case 3:
      ?>                  
                        <script>window.alert('El usuario ha cerrado sesión');</script>
      <?php                  
                        break;
                  }
                  $valse=0;
      ?>
    
</body>
</html>