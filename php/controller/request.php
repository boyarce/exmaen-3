<?php 
require'../persistence/ConexionManager.php';
require'/persistence/EntradaDAO.php';
require'/persistence/UsuarioDAO.php';
$con = new ConexionManager();
$entrada = new EntradaDAO($con); 
$usuario = new UsuarioDAO($con);

if(isset($_REQUEST['codigo']) && isset($_REQUEST['fecha']) && isset($_REQUEST['pelicula']) && isset($_REQUEST['precio']) && isset($_REQUEST['cantidad']) && isset($_REQUEST['total'])) {
	//vARIABLES
	$codigoEntrada			= $_REQUEST['codigo'];
	$fecha 		= $_REQUEST['fecha'];
	$nombrePelicula 		= $_REQUEST['pelicula'];
	$precio		= $_REQUEST['precio'];
	$cantidad		= $_REQUEST['cantidad'];
	$total		= $_REQUEST['total'];

	$entrada->agregarEntrada($codigoEntrada,$fecha,$nombrePelicula,$precio,$cantidad,$total);

}else{
	?><p>No se pudo ejecutar el Request</p><?php
}


if(isset($_REQUEST['rut']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apPaterno']) && isset($_REQUEST['apMaterno'])  && isset($_REQUEST['fechaNac']) && isset($_REQUEST['nomUsuario']) && isset($_REQUEST['contrasenia']) && isset($_REQUEST['tipoUsuario'])) {
	//vARIABLES
	$rut 			= $_REQUEST['rut'];
	$nombre 		= $_REQUEST['nombre'];
	$apPaterno 		= $_REQUEST['apPaterno'];
	$apMaterno 		= $_REQUEST['apMaterno'];

	$fechaNac 		= $_REQUEST['fechaNac'];
	$telefono 		= $_REQUEST['telefono'];
	$nombreUsuario 	= $_REQUEST['nomUsuario'];
	$contrasenia 	= $_REQUEST['contrasenia'];
	$tipoUsuario 	= $_REQUEST['tipoUsuario'];
	$usuario->agregarUsuario($rut,$nombre,$apPaterno,$apMaterno,$fechaNac,$telefono,$nombreUsuario,$contrasenia,$tipoUsuario);
}else{
	?><p>No se pudo ejecutar el Request</p><?php
}
?>