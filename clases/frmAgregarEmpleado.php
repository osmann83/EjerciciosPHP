<?php
  require "Pruebaconexion.php";

  $objConexion = Conectarse();

  $sql = "SELECT idCargo, carNombre FROM cargos";

  $resultado = $objConexion->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3 col-sm-6 p-3 bg-dark text-white">
  <h2>Formulario Agregar Empleado</h2>
  <form action="validarAgregarFormulario.php">
    <div class="mb-3 mt-3">
      <label for="identificacion">Identificacion:</label>
      <input type="number" class="form-control" id="identificacion" placeholder="Ingresa la identificación"
        name="identificacion" autofocus>
    </div>
    <div class="mb-3">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nom" placeholder="Ingresa tú nombre" name="nombre">
    </div>
    <div class="mb-3 mt-3">
      <label for="fecha">Fecha de Ingreso:</label>
      <input type="date" class="form-control" id="fecha" placeholder="Ingresa la fecha de ingreso" name="fecha" >
    </div>
    <div class="mb-3">
      <label for="email">Correo Electronico:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tú correo" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="genero">Genero:</label>      
      <select id="genero" class="form-control" name="genero">
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="nom">Cargo:</label>
      <select id="cargo" class="form-control" name="cargo">
        <!--<input type="select" class="form-control" id="cargo" placeholder="Ingrese sú cargo" name="cargo">-->
        <option value="0">Seleccione</option>
        <?php
        
          while($cargo = $resultado->fetch_object())
          {
        ?>
            <option value="<?php echo $cargo->idCargo?>"><?php echo $cargo->carNombre?></option>
        <?php
          }
        ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>