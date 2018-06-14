<?php

include_once __DIR__.'/Persona.php';
include_once __DIR__.'/Perfil.php';

class Usuario extends Persona {
    
    private $username;
    private $password;
    /**
     *
     * @var Perfil 
     */
    private $perfil;
    
    public function __construct($dni, $fechaNacimiento) {
        parent::__construct($dni, $fechaNacimiento);
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }



}
