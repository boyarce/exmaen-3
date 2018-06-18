<?php

class Entrada {
    private $codigo;
   
    private $fecha;
    private $precio;
     private $cantidad;
    
    function __construct($codigo, $fecha, $precio, $cantidad) {
        $this->codigo = $codigo;
        $this->fecha = $fecha;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    
    function getCodigo() {
        return $this->codigo;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }



}
