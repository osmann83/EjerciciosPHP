<?php

require "Pruebaconexion.php";

$objConexion = Conectarse();

$sql = "SELECT * FROM empleados";

$resultado = $objConexion -> query($sql);

$cantidadEmpleados = $resultado->num_rows;

echo "<br> Cantidad de empleados en la base de datos es: ". $cantidadEmpleados;
echo "<br>";

//imprimir en pantalla los datos de la tabla
while($empleado = $resultado -> fetch_object())
{
    echo "<br> Nombre Empleado: ".$empleado->empNombre;
    echo "<br> Fecha Ingreso Empleado: ".$empleado->empFechaIngreso;
    echo "<br> Genero Empleado: ".$empleado->empGenero;
    echo "<br>";
    echo "<br>";
}

?>