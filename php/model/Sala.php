<?php

class Sala {
    private $numeroSala;
    private $numeroAsiento;
    private $tipoSala;
    
    function __construct($numeroSala, $numeroAsiento, $tipoSala) {
        $this->numeroSala = $numeroSala;
        $this->numeroAsiento = $numeroAsiento;
        $this->tipoSala = $tipoSala;
    }
    
    function getNumeroSala() {
        return $this->numeroSala;
    }

    function getNumeroAsiento() {
        return $this->numeroAsiento;
    }

    function getTipoSala() {
        return $this->tipoSala;
    }

    function setNumeroSala($numeroSala) {
        $this->numeroSala = $numeroSala;
    }

    function setNumeroAsiento($numeroAsiento) {
        $this->numeroAsiento = $numeroAsiento;
    }

    function setTipoSala($tipoSala) {
        $this->tipoSala = $tipoSala;
    }



    
}
