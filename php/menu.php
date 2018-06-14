<?php
include_once __DIR__.'/model/Usuario.php';
?>

<div id="menu">
    <ul>
        <li>
            <a href="<?php echo APPLICATION_PATH ?>/index.php">Inicio</a>
        </li>              
<?php
    if(isset($_SESSION["usuario"])) {
        /* @var $usuario Usuario */
        $usuario = unserialize($_SESSION["usuario"]);
?>
        <li>
            <a href="<?php echo APPLICATION_PATH ?>/logout.php">Logout</a>
        </li>
<?php
    
    if($usuario->getPerfil()->getId() == 1) {
?>        
        <li>
            <a href="<?php echo APPLICATION_PATH ?>/configuracion.php">Configuración</a>
        </li>
<?php     
    }
?>          
        <li>
            <a href="<?php echo APPLICATION_PATH ?>/herejias.php">Material hereje</a>
        </li>
<?php     
    } else {
?>        
        <li>
            <a href="<?php echo APPLICATION_PATH ?>/login.php">Login</a>
        </li>  
<?php     
    }
?>         
    </ul>                
</div>