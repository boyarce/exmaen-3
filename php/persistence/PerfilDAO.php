<?php
include_once __DIR__.'/../persistence/AbstractDAO.php';
include_once __DIR__.'/../model/Perfil.php';

class PerfilDAO extends AbstractDAO {
        
    public function getAll() {
        $query = "SELECT id, nombre, descripcion "
                    ."FROM perfil";
        $listado = array();
        $statement = $this->conexion->prepare($query);
        $statement->execute();
        
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $perfil = new Perfil($row["id"]);
            $perfil->setNombre($row["nombre"]);
            $perfil->setDescripcion($row["descripcion"]);
            array_push($listado, $perfil);
        }
        
        return $listado;
    }

    public function get($id) {
        $query = "SELECT id, nombre, descripcion "
                    ."FROM perfil "
                    ."WHERE id = ?";
        $perfil = null;
        $statement = $this->conexion->prepare($query);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        if($result != null) {
            $perfil = new Perfil($result["id"]);
            $perfil->setNombre($result["nombre"]);
            $perfil->setDescripcion($result["descripcion"]);
        }
        
        return $perfil;
    }

    public function modify($element) {
        
    }

    public function remove($id) {
        
    }
    
    public function add($element) {
        
    }
    

}
