<?php
    use modell\UsuarioBanco;
	include_once "../modell/UsuarioBanco.php";
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<!-- Mostrar información del usuario -->
<h2>Información de la Cuenta</h2>
<?php
	echo "<p>Saldo Actual: " . $_SESSION['usuario']->getSaldo() . "€</p>";
	echo "<p>Entradas: " . implode(", ", $_SESSION['usuario']->getEntradas()) . "</p>";
	echo "<p>Salidas: " . implode(", ", $_SESSION['usuario']->getSalidas()) . "</p>";
?>
</body>
</html>
