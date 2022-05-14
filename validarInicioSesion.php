<?php
    $valse=0;
    session_start();

    extract ($_REQUEST);

    require "Pruebaconexion.php";

    $objConexion = Conectarse();
    //Vamos a realizar el proceso para consultar los pacientes.

    //Guardamos en una variable la sentencia sql

    $sql = "SELECT * FROM usuarios WHERE usuLogin = '$_REQUEST[login]' and usuPassword = '$_REQUEST[password]'";
    //Asignar a una variable el resultado de la consulta
    $resultado =$objConexion->query($sql);
    //verificamos si existe el usuario
    $existe = $resultado->num_rows;

    if($existe==1) //quiere decir que los datos están bien.
    {
        $usuario=$resultado->fetch_object();
        $_SESSION['user'] = $usuario->usuLogin;
        header("location:vistaPrincipal.php");
    }
    else
    {
        header("location:index.php?valse=1"); //valse=1 quiere decir que el ususario no está registrado       
    }
?>