<?php


class UsuarioDAO {
        
    public $conexion;
	function __construct($conexion)
	{
		$this->conexion = $conexion;
	}
	public function agregarUsuario($rut,$nombre,$apPaterno,$apMaterno,$fechaNac,$telefono,$nombreUsuario,$contrasenia,$tipoUsuario){
		try {
			$sql = $this->conexion->prepare("INSERT INTO PERSONA (rutPersona,nombrePersona,apellidoPaterno,apellidoMaterno,fechaNacimiento,telefono)VALUES(?,?,?,?,?,?,?)");
			$sql->execute(array($rut,$nombre,$apPaterno,$apMaterno,$fechaNac,$telefono));
			$sql = $this->conexion->prepare("INSERT INTO USUARIO_SISTEMA(rutPersona,nombreUsuario,contrasenia,codigoTipoUsuario)VALUES(?,?,?,?)");
			$sql->execute(array($rut,$nombreUsuario,$contrasenia,$tipoUsuario));	
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}
        
         public function selectTipoUsuario()
         {
        
            $sql = $this->conexion->query("SELECT * FROM TIPO_USUARIO");
            ?>
            <select name="tipoUsuario" id="tipoUsuario">
                <option value="0" selected>Seleccione el usuario</option>
                <?php
                while ($fila = $sql->fetch()) {
                    ?>
                    <option value="<?= $fila['codigoTipoUsuario'] ?>"><?= $fila['descripcion'] ?></option>
                    <?php
                }
                ?>
            </select>
            <?php
        
        }
    }
    


