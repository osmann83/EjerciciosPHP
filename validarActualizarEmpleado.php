<?php

    require "Pruebaconexion.php";
    extract($_REQUEST);
    
    
    $objConexion = Conectarse();

    $sql ="UPDATE empleados set empIdentificacion = '$_REQUEST[identificacion]', empNombre = '$_REQUEST[nombre]', empCorreo = '$_REQUEST[email]', 
    empFechaIngreso='$_REQUEST[fecha]', empGenero = '$_REQUEST[genero]', empCargo = '$_REQUEST[cargo]'
    
    WHERE idEmpleado = '$_REQUEST[idEmpleado]'";

    $resultado = $objConexion -> query($sql);

    if($resultado)
        header("location: listarEmpleados.php?x=1");//x=1 se actualizo correctamente
    else
        header("location: listarEmpleados.php?x=2");//x=2 no se actualizo correctamente

?>