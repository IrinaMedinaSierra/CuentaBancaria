<?php
	include_once "../modell/UsuarioBanco.php";
	session_start ();
	if (isset($_SESSION['usuario'])){
	
	?>
		<!doctype html>
		<html lang="es">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport"
			      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Document</title>
			<!-- Load an icon library -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/style.css">
			
		</head>
		<body>
        <?php
	        include_once "header.php";
        ?>
        <div class="caja-blanca">

            <!-- Validación de Usuario -->
            <h3>Opciones del Usuario</h3>
        <div class="navbar">
            <a class="active" href="../index.php"><i class="fa fa-fw fa-home"></i> Home</a>
            <a href="ingresar.php"><i class="fa fa-fw fa-search"></i> Ingresar</a>
            <a href="retirar.php"><i class="fa fa-fw fa-envelope"></i> Retirar</a>
            <a href="cambiarPin.php"><i class="fa fa-fw fa-user"></i> Cambiar Pin</a>
        </div>
            <?php
                include_once "footer.php";
            ?>
        </div>
		</body>
		</html>



<?php
	
	
	}else{
		header ("Location:../index.php?mensaje=Usuario no autorizado");
	}
