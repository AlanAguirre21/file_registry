//******************** AGREGAR NUEVA CATEGORÍA ************************

function agregarCategoria() {
	let categoria = $('#nombreCategoria').val();

	if(categoria == ""){
		Swal.fire("Debes agregar una categoria");
		return false;
	} else {
		$.ajax({
			type:"POST",
			data:"categoria=" + categoria,
			url:"processes/categories/agregarCategoria.php",
			success:function(respuesta){
				respuesta = respuesta.trim();
				if(respuesta == 1){
					$('#tablaCategorias').load("tablaCategoria.php");
					$('#nombreCategoria').val("");
					Swal.fire(":D", "Agregado con éxito!", "success");
				} else {
					Swal.fire(":(", "Fallo al agregar!", "error");
				}

			}
		});
	}
}

//******************** ELIMINAR CATEGORÍA ********************************

function eliminarCategoria(idCategoria) {
	let idCategoria = parseInt(idCategoria);
	if(idCategoria < 1){
		Swal.fire("Tu categoría no tiene id!");
		return false;
	} else {
		Swal.fire({
			title: "¿Estás seguro?",
			text: "No serás capaz de revertir este cambio!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Si, eliminar"
		})
		.then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					type: "POST",
					data: "idCategoria=" + idCategoria, 
					url: "processes/categories/eliminarCategoria.php", 
					success:function(respuesta){
						respuesta = respuesta.trim();
						if (respuesta == 1){
							$('#tablaCategorias').load("tablaCategoria.php");
							Swal.fire({
								title: "Eliminado!",
								text: "La categoría ha sido eliminada.",
								icon: "success"
								});
						} else {
							Swal.fire(":(", "Error al eliminar la categoría!", "error");
						}
					}
				})
			}
		});
	}
}

//******************** OBTENER DATOS DE CATEGORÍA*******************************************

function obtenerDatosCategoria(idCategoria){
	idCategoria = parseInt(idCategoria);
	if(idCategoria < 1){
		Swal.fire("Tu categoría no tiene ID!");
		return false;
	} else {
		$.ajax({
			type: "POST",
			data: "idCategoria=" + idCategoria,
			url: "processes/categories/obtenerCategoria.php",
			success:function(respuesta){
				respuesta = JSON.parse(respuesta);

				$('#idCategoria').val(respuesta['idCategoria']);
				$('#categoriaU').val(respuesta['nombreCategoria']);

			}
			
		})
	}
}

//****************** ACTUALIZAR CATEGORÍA *****************************

function actualizarCategoria() {
	if($('#categoriaU').val() == ""){
		Swal.fire(":(", "No has agregado una categoría!", "error");
		return false;
	} else {
		$.ajax({
			type: "POST",
			data: $('#frmActualizarCategoria').serialize(),
			url: "processes/categories/actualizarCategoria.php",
			success:function(respuesta){
				respuesta = respuesta.trim();

				if (respuesta == 1){
					$('#tablaCategorias').load("tablaCategoria.php");
					$('#btnCerrarUpdateCategoria').click();
					Swal.fire({
						title: "Actualizado",
						text: "La categoría ha sido actualizada exitosamente!.",
						icon: "success"
					});
				} else {
					Swal.fire(":(", "Error al actualizar categoría!", "error");
				}
			}
		})
	}
}