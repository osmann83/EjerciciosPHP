<?php

    require "Pruebaconexion.php";
    extract ($_REQUEST);

    $objConexion = Conectarse();

    $sql = "DELETE FROM empleados WHERE idEmpleado = '$_REQUEST[idEmpleado]'";

    $resultado = $objConexion -> query($sql);

    if($resultado)
        header("location: listarEmpleado.php?x=3"); // x=3 Se elimino
    else
        header("location: listarEmpleado.php?x=4"); //x=4 No se pudo eliminar

?>