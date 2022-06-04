<?php

    require "Pruebaconexion.php";
    extract ($_REQUEST);

    $objConexion = Conectarse();

    $sql = "INSERT INTO empleados (empIdentificacion, empNombre, empFechaIngreso, empCorreo, empGenero, empCargo)
    values ('$_REQUEST[identificacion]', '$_REQUEST[nombre]', '$_REQUEST[fecha]', 
    '$_REQUEST[email]', '$_REQUEST[genero]', '$_REQUEST[cargo]')";

    $resultado = $objConexion->query($sql);

    if($resultado)
        header("location: listarEmpleados.php?x=5");//x=5 se ha agregado correctamente
    else
        header("location: listarEmpleados.php?x=6");//x=6 no se ha agregado correctamente

?>