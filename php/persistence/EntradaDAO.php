<?php


class EntradaDAO {
    public $conexion;
	function __construct($conexion)
	{
		$this->conexion = $conexion;
	}
	public function agregarEntrada($codigo,$fecha,$pelicula,$precio,$cantidad,$total){
		try {
			$sql = $this->conexion->prepare("INSERT INTO ENTRADA (codigoEntrada,fechaEntrada,precio,cantidad,total,codigoPelicula)VALUES(?,?,?,?,?,?)");
			$sql->execute(array($codigo,$fecha,$pelicula,$precio,$cantidad,$total));
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}
}
