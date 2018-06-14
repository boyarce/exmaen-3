<?php


class Persona {
    
    private $dni;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $sexo;
    private $telefono;
    private $email;
    private $direccion;
    
    public function __construct($dni, $fechaNacimiento) {
        $this->dni = $dni;
        $this->fechaNacimiento = $fechaNacimiento;        
        $this->nombre=null;
        $this->apellido=null;
        $this->sexo=null;
        $this->telefono=null;
        $this->email=null;
        $this->direccion=null;
    }   
    
    public function getDni() {
        return $this->dni;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }


}
