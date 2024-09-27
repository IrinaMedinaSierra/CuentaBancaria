<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Banco Virtual</title>
	<link rel="stylesheet" href="views/css/style.css"> <!-- Enlace opcional a CSS -->
	<link rel="stylesheet" href="views/css/style2.css"> <!-- Enlace opcional a CSS -->
    <link rel="icon" href="views/img/favicon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<div class="row ancho">
    <div class="col-6">
        <img src="views/img/banca.png" alt="Banca Online" class="logo">
    </div>
    <div class="col-6  derecha">
            <span class="material-symbols-outlined icono-verde">
                contact_support
            </span>
        <span class="ayuda">
                ¿Te ayudamos?
            </span>
    </div>
</div>

<div class="caja-negra">
    <div class="numeros">
        <span class="numero-activo">Ingresar al Banco</span>
    </div>
</div>
<div class="caja-blanca">

<!-- Validación de Usuario -->
<h3>Validar Usuario</h3>
<form method="post" action="controller/procesar.php?action=validar" class="formulario">
	<label for="nombre">Nombre:</label>
	<input type="text" name="nombre" id="nombre" required><br>
	<label for="pin">PIN:</label>
	<input type="password" name="pin" id="pin" required><br>
	<input type="submit" value="Validar Usuario" class="boton">
</form>
    <?php
        if (!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
    ?>
</div>
</body>
</html>

