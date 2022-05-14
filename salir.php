<?
    session_start();
    session_unset();
    session_destroy();
    /*Se envia al formulario inicio sesión conuna variable x=1, que le indica que ha cerrado la sesion*/
    header('location:index.php?valse=3');

?>