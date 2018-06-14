<?php

include_once __DIR__.'/ConexionManager.php';

abstract class AbstractDAO {
    
    /**
     *
     * @var ConexionManager
     */
    protected $conexion;
    
    /**
     * 
     * @param ConexionManager $conexionManager
     */
    public function __construct($conexionManager) {
        $this->conexion = $conexionManager;
    }       
 
    public abstract function get($id);
    
    public abstract function getAll();
    
    public abstract function add($element);
    
    public abstract function modify($element);
    
    public abstract function remove($id);
}
