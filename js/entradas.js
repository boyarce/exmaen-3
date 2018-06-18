$("#btn_guarda_entrada").click(function(){

		if($("#codigo").val() == ""){
			alert("Debe ingresar el codigo");
			$("#codigo").focus();
		}else if($("#fecha").val()==""){
			alert("Debe ingresar la fecha");
			$("#fecha").focus();
		}else if($("#pelicula").val()=="Seleccione pelicula"){
			alert("Debe seleccionar la pelicula");
			$("#pelicula").focus();
		}else if($("#precio").val()==""){
			alert("Debe ingresar el precio");
			$("#precio").focus();
		}else if($("#cantidad").val()==""){
			alert("Debe ingresar la cantidad");
			$("#cantidad").focus();
                }else if($("#total").val()==""){
			alert("Debe mostrar el total");
			$("#total").focus();
		}else{
			var codigoEntrada = $("#codigo").val();
			var fecha       = $("#fecha").val();
			var pelicula 	= $("#pelicula").val();
			var precio 	= $("#precio").val();
			var cantidad    = $("#cantidad").val();
			var total       = $("#total").val();

			//JSON
			var datos = {
				codigoEntrada:codigo,
				fecha:fecha,
				pelicula:pelicula,
				precio:precio,
				cantidad:cantidad,
                                total:total
				
			};
			//AJAX
			$.ajax({
                method:'POST',
                url:'../../controller/request.php',
                data:datos,
                success:function(data){
                    alert("Entrada registrada correctamente");
                    window.close();
                    $("#formEntrada")[0].reset();
                 
                    $("#respuesta").html(data);
                }
            });

		}

	});