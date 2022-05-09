<?php

$con="";

try{
    $con =mysql_connect("localhost","root","");
    mysql_select_db("empresa",$con);
    echo "conexion exitosa";

}
catch(Exception $e)
{
    echo "<script>window.alert('Error en Conexion')</script>";
}

?>