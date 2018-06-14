<?php include './php/config.php'; ?>
<?php include './php/header.php'; ?>
<?php include './php/menu.php'; ?>
<?php include './php/controller/LoginController.php'; ?>

<section id="contenido">
    <h2>Login</h2>
    <article>
        <h3>Autenticación de usuarios</h3>
        Por favor ingrese sus credenciales para acceder al 
        contenido hereje del sitio.
    </article>
    <div class="login">
        <div class="<?= $error_css ?>">
            <?= $error_msg ?>
        </div>
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td>
                        <input type="text" name="usuario" value="" required />
                    </td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td>
                        <input type="password" name="clave" value="" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="ingresar" value="Ingresar" />
                    </td>
                    <td>
                        <input type="reset" name="limpiar" value="Limpiar" />
                    </td>
                </tr>
            </table>            
        </form>
    </div>
</section>

<?php include './php/footer.php'; ?>            