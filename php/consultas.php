<?php
   function lista_propietario(){		
		include('conexion.php');	
		$sql="SELECT * FROM propietario ";
		return $result=$mysqli->query($sql); 
	}

	function extraer_propietario($id){		
		include('conexion.php');	
		$sql="SELECT * FROM propietario WHERE codpropietario = '$id'";
		return $result=$mysqli->query($sql); 
	}

	function extraer_cliente($id){		
		include('conexion.php');	
		$sql="SELECT * FROM clientes WHERE codcliente = '$id'";
		return $result=$mysqli->query($sql); 
	}

	function extraer_tipo_mantenimiento($id){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_mantenimiento WHERE codtipo_mant = '$id'";
		return $result=$mysqli->query($sql); 
	}

	function extraer_tipo_equipo($id){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_equipo WHERE codtipo_equipo  = '$id'";
		return $result=$mysqli->query($sql); 
	}


	
	function lista_cliente(){		
		include('conexion.php');	
		$sql="SELECT * FROM clientes";
		return $result=$mysqli->query($sql); 
	}

	function tipo_mantenimiento(){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_mantenimiento";
		return $result=$mysqli->query($sql); 
	}

	function tripulacion(){		
		include('conexion.php');	
		$sql="SELECT * FROM tripulacion";
		return $result=$mysqli->query($sql); 
	}

	function tipo_equipo(){		
		include('conexion.php');	
		$sql="SELECT * FROM tipo_equipo";
		return $result=$mysqli->query($sql); 
	}
?>