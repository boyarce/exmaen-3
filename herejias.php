<?php include './php/config.php'; ?>
<?php include './php/controller/SessionController.php'; ?>
<?php include './php/header.php'; ?>
<?php include './php/menu.php'; ?>
<?php require_once '/persistence/EntradaDao.php';
$con = new ConexionManager();
$pelicula = new PeliculaDao($con);?>
<script> src="../js/jquery-3.2.1.min.js"</script>

<section id="contenido">
  
   <h2>Herejías</h2>
    <article>
        <h3>Registro de entradas</h3>        

        
    </article>
        <form action="" method="POST" id="formEntrada">
        <label for="codigo">Codigo: </label>
        <input type="text" name="codigo" id="codigo" value="" />
        <label for="fecha">Fecha:</label> 
        <input type="date" name="fecha" id="fecha" value="" />
        <label for="pelicula">Pelicula</label>
        <?=$pelicula->selectPelicula()?>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" value="" />
        <label for="cantidad">Cantidad:</label> 
        <input type="text" name="cantidad" id="cantidad"  value="" />
        <label for="total">Total:</label>
        <input type="text" name="cantidad" id="cantidad"  value="" />
          
         <button type="button" id="btn_guarda_entrada">Guardar</button>
        </form>         
       <div id="respuesta"></div>
                

</body>
</html>


   
</section>

<?php include './php/footer.php'; ?>            