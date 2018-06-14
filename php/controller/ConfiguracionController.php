<?php
    
include_once __DIR__.'/../persistence/ConexionManager.php'; 
include_once __DIR__.'/../persistence/UsuarioDAO.php'; 
include_once __DIR__.'/../persistence/PerfilDAO.php';
include_once __DIR__.'/../model/Perfil.php';
include_once __DIR__.'/../model/Usuario.php';

class ConfigurationController {
    
    /**
     * @var ConexionManager
     */
    private $conexionManager;
    
    /**
     * @var ConfigurationController
     */
    private static $controller = null;
    
    private function __construct() {
        $this->conexionManager = new ConexionManager();
    }
    
    /**
     * 
     * @return type ConfigurationController
     */
    public static function getInstance() {
        if(static::$controller == null) {
            static::$controller = new ConfigurationController();
        }
        
        return static::$controller;
    }
    
    public function getUsuarios() {    
        $dao = new UsuarioDAO($this->conexionManager);
        return $dao->getAll();
    }
    
    public function getPerfiles() { 
        $dao = new PerfilDAO($this->conexionManager);
        return $dao->getAll();
    }
}


