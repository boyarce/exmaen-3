<?php
include_once __DIR__.'/../persistence/AbstractDAO.php';
include_once __DIR__.'/../model/Usuario.php';

class UsuarioDAO extends AbstractDAO {
        
    public function getAll() {
        $query = "SELECT a.login, a.password, 
                         b.dni, b.nombre, b.apellido, b.fecha_nacimiento, 
                         c.id, c.nombre as perfil
                  FROM usuario a, persona b, perfil c
                  WHERE a.dni = b.dni and a.perfil = c.id";
        $listado = array();
        $statement = $this->conexion->prepare($query);
        $statement->execute();
        
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $usr = new Usuario($row["dni"], $row["fecha_nacimiento"]);
            $perfil = new Perfil($row["id"]);
            $perfil->setNombre($row["perfil"]);
            $usr->setNombre($row["nombre"]);
            $usr->setApellido($row["apellido"]);
            $usr->setUsername($row["login"]);
            $usr->setPerfil($perfil);
            array_push($listado, $usr);
        }
        
        return $listado;
    }

    public function get($id) {
      
    }

    public function modify($element) {
        
    }

    public function remove($id) {
        
    }
    
    public function add($element) {
        
    }
    

}
