<?php

class PeliculaDao {
    public $conexion;
	function __construct($conexion)
	{
		$this->conexion = $conexion;
	}
	public function agregarPelicula($codigoPelicula, $nombrePelicula){
		try {
			$sql = $this->conexion->prepare("INSERT INTO PELICULA (codigoPelicula, nombrePelicula)VALUES(?,?)");
			$sql->execute(array($codigoPelicula, $nombrePelicula));
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}
        
         public function selectPelicula()
         {
        
            $sql = $this->conexion->query("SELECT * FROM PELICULA");
            ?>
            <select name="tipoPelicula" id="tipoPelicula">
                <option value="0" selected>Seleccione pelicula</option>
                <?php
                while ($fila = $sql->fetch()) {
                    ?>
                    <option value="<?= $fila['codigoPelicula'] ?>"><?= $fila['nombrePelicula'] ?></option>
                    <?php
                }
                ?>
            </select>
            <?php
        
        }
}
