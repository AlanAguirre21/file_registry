function agregarArchivosGestor() {
	var formData = new FormData(document.getElementById('frmArchivos'));

	$.ajax({
		url: "processes/gestor/guardarArchivos.php",
		type: "POST",
		datatype: "html",
		data: formData,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){
			console.log("Esta es la respuesta:")
			console.log(respuesta);
			console.log("Eso fue la respuesta.")
			respuesta = respuesta.trim();

			if(respuesta == 1){
				$('#tablaGestorArchivos').load('tablaGestor.php');
				Swal.fire(":D", "Archivo agregado con éxito!", "success");
			} else {
				Swal.fire(":(", "Ha habido un error en la inserción!", "error");
			}
		}
	});
}

function eliminarArchivo(idArchivo) {
	let idArchivo = parseInt(idArchivo);
	if(idArchivo < 1){
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
					data: "idArchivo=" + idArchivo,
					url: "processes/gestor/eliminarArchivo.php",
					success:function(respuesta){
						respuesta = respuesta.trim();
						if(respuesta == 1){
							$('#tablaGestorArchivos').load('tablaGestor.php');
							Swal.fire({
								title: "Eliminado!",
								text: "El archivo ha sido eliminado.",
								icon: "success"
							});
						} else {
							Swal.fire(":(", "Ha habido un error al eliminar el archivo!", "error");
						}
					}
				})
			}
		});
	}
}