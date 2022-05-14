<?php
    session_start();
    extract ($_REQUEST);

    if(!isset($_SESSION['user']))
        header("location: index.php?valse=2");
    if(!isset($_REQUEST['pg']))
        $pg="pgInicial";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        #divContenido{
            position:absolute;
            left:320px;
            top:120px;
            width:858px;
            height:400px;
            z-index: 4;
            overflow:auto
        }
    </style>
    <title>Pagina Principal</title>
</head>
<body>
    <div class="p-5 bg-primary text-white text-center">
        <h1>PAGINA PRINCIPAL</h1>
        <p>Tenemos todo el menú</p> 
    </div>  
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="vistaPrincipal.php?pg=frmAgregarEmpleado">Agregar Empleado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vistaPrincipal.php?pg=listarEmpleados">Listar Empleado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="salir.php">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="divContenido">
        <?php include $pg.".php"; ?>
    </div>



</body>
</html>