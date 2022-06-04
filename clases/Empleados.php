<?php

require "Pruebaconexion.php";

$objConexion = Conectarse();

$sql = "SELECT * FROM empleados WHERE empIdentificacion = '1114568658'";

$resultado = $objConexion -> query($sql);

//imprimir en pantalla los datos del empleado
if($empleado = $resultado -> fetch_object())
{
    echo "<br> Nombre Empleado: ".$empleado->empNombre;
    echo "<br> Fecha Ingreso Empleado: ".$empleado->empFechaIngreso;
    echo "<br> Genero Empleado: ".$empleado->empGenero;
}
else{
    echo "No existe empleado con esa identificación";
}
?>