<?php

class ConexionManager extends PDO {

    private static $URL = "mysql:host=localhost;dbname=cine;charset=utf8";
    private static $USUARIO = "user";
    private static $PASS = "123";
    private static $OPCIONES = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    function __construct() {
        parent::__construct(self::$URL, self::$USUARIO, self::$PASS, self::$OPCIONES);
    }
   
}