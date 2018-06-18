$(document).ready(function(){
	
		


	$("#agregar_user").click(function(){
		var url = "agregarUsuarios.php";
		window.open(url,"agregarUsuarios","width=500,height=500");
	});

	$("#btn_guarda_usuario").click(function(){

		if($("#rut").val() == ""){
			alert("Debe ingresar el RUT");
			$("#rut").focus();
		}else if($("#nombre").val()==""){
			alert("Debe ingresar el nombre");
			$("#nombre").focus();
		}else if($("#apPaterno").val()==""){
			alert("Debe ingresar el apellido Paterno");
			$("#apPaterno").focus();
		}else if($("#apMaterno").val()==""){
			alert("Debe ingresar el apellido Materno");
			$("#apMaterno").focus();
		
		}else if($("#fechaNac").val()==""){
			alert("Debe seleccionar la fecha de nacimiento");
			$("#fechaNac").focus();
		}else if($("#nombreUsuario").val()==""){
			alert("Debe ingresar el nombre de usuario");
			$("#nombreUsuario").focus();
		}else if($("#contrasenia").val()==""){
			alert("Debe ingresar la contraseña");
			$("#contrasenia").focus();
		}else if($("#tipoUsuario").val()=="Seleccione"){
			alert("Debe ingresar el tipo de usuario");
			$("#tipoUsuario").focus();
		}else{
			var rut 		= $("#rut").val();
			var nombre 		= $("#nombre").val();
			var apPaterno 	= $("#apPaterno").val();
			var apMaterno 	= $("#apMaterno").val();
			
			var fechaNac 	= $("#fechaNac").val();
			var telefono 	= $("#telefono").val();
			var nomUsuario 	= $("#nombreUsuario").val();
			var contrasenia = $("#contrasenia").val();
			var tipoUsuario = $("#tipoUsuario").val();

			//JSON
			var datos = {
				rut:rut,
				nombre:nombre,
				apPaterno:apPaterno,
				apMaterno:apMaterno,
				
				fechaNac:fechaNac,
				telefono:telefono,
				nomUsuario:nomUsuario,
				contrasenia:contrasenia,
				tipoUsuario:tipoUsuario
			};
			//AJAX
			$.ajax({
                method:'POST',
                url:'../../controller/request.php',
                data:datos,
                success:function(data){
                    alert("Usuario registrado correctamente");
                    window.close();
                    $("#formUsuario")[0].reset();
                    $('#ad_usuarios').click();
                    $("#respuesta").html(data);
                }
            });

		}

	});

	

		

	

	

});

