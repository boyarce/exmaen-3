<?php
require '../../persistence/ConexionManager.php';
require '../../persistence/UsuarioDAO.php';
$con = new ConexionManager();
$usuario = new UsuarioDAO($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuarios</title>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/usuarios.js"></script>
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-6">
            <div id="add-user">
                <h2>Agregar Usuarios</h2>
                <div>
                    <form action="" method="POST" id="formUsuario">
                        <div class="form-group">
                            <label for="rut">RUT:</label>
                            <input type="text" name="rut" id="rut">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" >
                            <label for="apPaterno">Apellido Paterno: </label>
                            <input type="text" name="apPaterno" id="apPaterno">
                            <label for="apMaterno">Apellido Materno:</label>
                            <input type="text" name="apMaterno" id="apMaterno">
                            <label for="fechaNac">Fecha Nacimiento:</label>
                            <input type="date" name="fechaNac" id="fechaNac">
                            <label for="telefono">Tel&eacute;fono:</label>
                            <input type="text" name="telefono" id="telefono" >
                            <label for="nombreUsuario">Nombre Usuario:</label>
                            <input type="text" name="nombreUsuario" id="nombreUsuario">
                            <label for="contrasenia">Contrase&ntilde;a:</label>
                            <input type="text" name="contrasenia" id="contrasenia">
                            <label for="tipousuario">Tipo usuario:</label>
                            <?= $usuario->selectTipoUsuario(); ?><br>
                            <button type="button" id="btn_guarda_usuario">Guardar</button>
                        </div>
                    </form>
                    <div id="respuesta"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>