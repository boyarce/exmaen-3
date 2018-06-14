<?php include './php/config.php'; ?>
<?php include './php/controller/SessionController.php'; ?>
<?php include './php/header.php'; ?>
<?php include './php/menu.php'; ?>
<?php include './php/controller/ConfiguracionController.php'; ?>

<?php
    /* @var $usuario Usuario */
    $usuario = unserialize($_SESSION["usuario"]);    
    
    if($usuario->getPerfil()->getId() == 1) {
        /*@var $controller ConfigurationController */
        $controller = ConfigurationController::getInstance();
?>    

<section id="contenido">
    <h2>Configuración de Usuarios</h2>
    <article>
        <h3>Configuración de la cuenta</h3>
        A continuación las opciones para configurar los datos de las
        cuentas de usuario.
    </article>
    
    <article>        
        <table class="configuracion-usuarios">
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Perfil</th>
                <th colspan=2"">Operaciones</th>
            </tr>
<?php           
        $usuarios = $controller->getUsuarios();
        foreach ($usuarios as $usr) {
        /* @var $usr Usuario */
?>            
            <tr>
                <td><?= $usr->getUsername() ?></td>
                <td><?= $usr->getNombre() ?></td>
                <td><?= $usr->getApellido() ?></td>
                <td><?= $usr->getFechaNacimiento() ?></td>
                <td><?= $usr->getPerfil()->getNombre() ?></td>
                <td>
                    <a href="#">Modificar</a>
                </td>
                <td>
                    <a href="#">Eliminar</a>
                </td>
            </tr>
<?php
            }
?>            
        </table>
        
        <table class="configuracion-perfiles">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th colspan=2"">Operaciones</th>
            </tr>
<?php           
        $perfiles = $controller->getPerfiles();
        foreach ($perfiles as $perfil) {
        /* @var $perfil Perfil */
?>            
            <tr>
                <td><?= $perfil->getId() ?></td>
                <td><?= $perfil->getNombre() ?></td>
                <td><?= $perfil->getDescripcion() ?></td>
                <td>
                    <a href="#">Modificar</a>
                </td>
                <td>
                    <a href="#">Eliminar</a>
                </td>
            </tr>
<?php
            }
?>            
        </table>
    </article>
</section>

<?php
    } else {
?>
<section id="contenido">
    <div class="error-msg">
        Usted no tiene acceso a este contenido
    </div>
</section>
<?php
    } 
?>

<?php include './php/footer.php'; ?>            