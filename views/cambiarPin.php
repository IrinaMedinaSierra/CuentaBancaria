<?php
if (isset($_SESSION["usuario"])){

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css"> !-- Enlace opcional a CSS
	-->

</head>
<body>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-activo">Cambiar Pin</span>
    </div>
</div>
<div class="caja-blanca">
<!-- Cambiar PIN -->
<h2>Cambiar PIN</h2>
<form method="POST" action="../controller/procesar.php?action=cambiar_pin">
	<label for="nuevoPin">Nuevo PIN:</label>
	<input type="password" name="nuevoPin" id="nuevoPin" required><br>
	<button type="submit">Cambiar PIN</button>
</form>
    <?php
        include_once "footer.php";
	    }else{
    echo "Usuario no autorizado para esta acción";
    }
    ?>
</div>
</body>
</html>
