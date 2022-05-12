<?php

require "Pruebaconexion.php";

$objConexion = Conectarse();

$sql = "SELECT e.idEmpleado, e.empIdentificacion, e.empNombre, e.empCorreo, e.empFechaIngreso, c.carNombre, c.carSueldo FROM empleados e, cargos c
        WHERE (e.empCargo = c.idCargo)";

$resultado = $objConexion -> query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Listar Empleados</title>
</head>
<body>
    <h1 align="center">Listar Empleados</h1>
    <div class="container mt-3">
    <h2>Lista de empleados de ADSI</h2>
    <p>Se lista la tabla desde la base de datos:</p>            
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha Ingreso</th>
            <th>Cargo</th>
            <th>Sueldo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // agregar cada fila de la tabla de acuerdo al número de empleados de forma dinamica
        
        while($empleado = $resultado ->fetch_object())
        {
        ?>
        <tr>
            <td><?php echo $empleado->empIdentificacion ?></td>
            <td><?php echo $empleado->empNombre ?></td>
            <td><?php echo $empleado->empCorreo ?></td>    
            <td><?php echo $empleado->empFechaIngreso ?></td>
            <td><?php echo $empleado->carNombre ?></td>
            <td><?php echo $empleado->carSueldo ?></td>
            <td align="center">
                <a href="frmActualizarEmpleado.php?idEmpleado=<?php echo $empleado->idEmpleado?>"><img src="img/pencil-square.svg" width="32" height="32">
                </a>
            </td>
            <td align="center">
                <a href="frmActualizarEmpleado.php?idEmpleado=<?php echo $empleado->idEmpleado?>"><img src="img/trash.svg" width="32" height="32">
                </a>
            </td>
            
        </tr>   
        <?php    
        }
        
        
        ?>

        </tbody>
    </table>
    </div>
</body>
</html>