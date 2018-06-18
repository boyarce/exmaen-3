<?php


class Pelicula {
   private $codigoPelicula;
   private $nombre;
   
   
   function __construct($codigoPelicula, $nombre) {
       $this->codigoPelicula = $codigoPelicula;
       $this->nombre = $nombre;
      
   }
   
   function getCodigoPelicula() {
       return $this->codigoPelicula;
   }

   function getNombre() {
       return $this->nombre;
   }

  
   function setCodigoPelicula($codigoPelicula) {
       $this->codigoPelicula = $codigoPelicula;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   

}
