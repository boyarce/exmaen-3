<?php

class ConexionManager extends PDO {
    
    const DB_USR="dai-usr";
    const DB_PWD="dai5501";    
    const DSN='mysql:host=localhost;dbname=demo_db;charset=utf8';
    
    public function __construct() {        
        parent::__construct(static::DSN, static::DB_USR, static::DB_PWD);
    }
    
}
