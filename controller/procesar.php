<?php
	require_once '../modell/UsuarioBanco.php';
	use modell\UsuarioBanco;
	session_start();
	// Inicializar el usuario en la sesión si no existe
	if (!isset($_SESSION['usuario'])) {
		$_SESSION['usuario'] = new UsuarioBanco('Juan', 1234);
	}
// Verificar qué acción se debe ejecutar
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
		
		switch ($action) {
			case 'validar':
				$nombre = $_POST['nombre'];
				$pin = $_POST['pin'];
				if ($_SESSION['usuario']->validaUsuario($nombre, $pin)) {
					header ("Location:../views/menuOpciones.php");
				} else {
					header("Location:../index.php?mensaje=Nombre o PIN incorrectos.");
				}
				break;
			
			case 'cambiar_pin':
				$nuevoPin = $_POST['nuevoPin'];
				$_SESSION['usuario']->cambiaPin($nuevoPin);
				echo "PIN cambiado correctamente.";
				break;
			
			case 'ingresar':
				$cantidad = $_POST['cantidad'];
				$_SESSION['usuario']->ingresar($cantidad);
				echo "Cantidad ingresada correctamente.";
				break;
			
			case 'sacar':
				$cantidadSacar = $_POST['cantidadSacar'];
				if ($_SESSION['usuario']->sacar($cantidadSacar)) {
					echo "Cantidad retirada correctamente.";
				} else {
					echo "Saldo insuficiente para retirar esa cantidad.";
				}
				break;
		}
	}

// Redirigir al index después de procesar
	/*header("Location: ../index.php");
	exit();
*/