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

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="number">Identificacion:</label>
      <input type="number" class="form-control" id="number" placeholder="Ingresa la identificación" name="ID" autofocus>
    </div>
    <div class="mb-3">
      <label for="nom">Nombre:</label>
      <input type="text" class="form-control" id="nom" placeholder="Ingresa tú nombre" name="nombre">
    </div>
    <div class="mb-3 mt-3">
      <label for="fec">Fecha de Ingreso:</label>
      <input type="date" class="form-control" id="fec" placeholder="Ingresa la fecha de ingreso" name="fec" >
    </div>
    <div class="mb-3">
      <label for="email">Correo Electronico:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa tú correo" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="gender">Genero:</label>
      <input class="form-control" id="gender" placeholder="Con que genero se identifica" name="gen" list="generos">
      <datalist id="gender">
        <option value="Masculino">
        <option value="Femenino">
        <option value="Otro">
      </datalist>
    </div>
    <div class="mb-3">
      <label for="nom">Nombre:</label>
      <input type="text" class="form-control" id="nom" placeholder="Ingresa tú nombre" name="nombre">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>