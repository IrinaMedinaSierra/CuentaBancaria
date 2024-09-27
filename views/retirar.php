<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css"> <!-- Enlace opcional a CSS -->
</head>
<body>

<!-- Sacar Dinero -->
<h2>Sacar Dinero</h2>
<form method="POST" action="../controller/procesar.php?action=sacar">
	<label for="cantidadSacar">Cantidad:</label>
	<input type="number" name="cantidadSacar" id="cantidadSacar" required><br>
	<button type="submit">Sacar</button>
</form>
</body>
</html>
