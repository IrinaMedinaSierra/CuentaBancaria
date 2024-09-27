<?php
	namespace modell;
	
	class UsuarioBanco
	{
		private $nombre;
		private $pin;
		private $saldo;
		private $entradas = [];
		private $salidas = [];
		
		public function __construct ($nombre, $pin)
		{
			$this->nombre = $nombre;
			$this->pin = $pin;
			$this->saldo = 0;
		}
		
		// Método para cambiar el pin
		public function cambiaPin ($nuevoPin)
		{
			$this->pin = $nuevoPin;
		}
		
		// Método para validar usuario
		public function validaUsuario ($nombre, $pin)
		{
			return ($this->nombre == $nombre && $this->pin == $pin);
		}
		
		// Método para ingresar dinero
		public function ingresar ($cantidad)
		{
			$this->entradas[] = $cantidad;
			$this->saldo += $cantidad;
		}
		
		// Método para sacar dinero
		public function sacar ($cantidad)
		{
			if ($cantidad <= $this->saldo) {
				$this->salidas[] = $cantidad;
				$this->saldo -= $cantidad;
				return true;
			}
			return false;
		}
		
		// Método para obtener el saldo
		public function getSaldo ()
		{
			return $this->saldo;
		}
		
		// Método para obtener entradas
		public function getEntradas ()
		{
			return $this->entradas;
		}
		
		// Método para obtener salidas
		public function getSalidas ()
		{
			return $this->salidas;
		}
	}

?>
