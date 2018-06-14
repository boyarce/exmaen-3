<?php

include_once __DIR__.'/../model/Perfil.php';
include_once __DIR__.'/../model/Usuario.php';

$error_css="";
$error_msg="";

$perfil = new Perfil(1);
$perfil->setNombre("Administrador");
$perfil->setDescripcion("Puede acceder a todas las funcionalidades del sitio");

$adminUser = new Usuario("12345678-5", "2000-01-01");
$adminUser->setUsername("admin");
$adminUser->setPassword("dai5501");
$adminUser->setPerfil($perfil);
        


#Verificamos que se ha enviado un formulario vía http POST
if($_SERVER["REQUEST_METHOD"] === "POST") {
    
    #Verificar que vienen datos en las variables esperadas
    if(isset($_POST["usuario"]) && isset($_POST["clave"])) {
        
        if($_POST["usuario"] === $adminUser->getUsername() && $_POST["clave"]===$adminUser->getPassword()) {
            $_SESSION["usuario"] = serialize($adminUser);
            header("location:".APPLICATION_PATH."/herejias.php");
        } else {
            $error_css="error-msg";
            $error_msg="Usuario o contraseña incorrecto";
        }
    }
}
