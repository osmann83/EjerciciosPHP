<?php

require "Pruebaconexion.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql = "INSERT INTO empleados (empIdentificacion, empNombre, empFechaIngreso, empCorreo, empGenero, empCargo)
values ('$_REQUEST[identificacion]', '$_REQUEST[nombre]', '$_REQUEST[fecha]', 
'$_REQUEST[email]', '$_REQUEST[genero]', '$_REQUEST[cargo]')";

$resultado = $objConexion->query($sql);

if($resultado)
    echo "El empleado se ha agregado correctamente";
else
    echo "Problemas al insertar empleado";


?>