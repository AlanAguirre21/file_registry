function inicializarDataTable(selectorTable) {
	$(selectorTable).DataTable({
		responsive: true,
		pageLenght: 10,
		lengthMenu: [5, 10, 25, 50, { label: 'All', value: -1 }],
		language: {
			searchPlaceholder: "Buscar...",
			search: "",
			lengthMenu: 'Mostrar _MENU_ registros por página',
			zeroRecords: "No se encontraron registros",
			info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
			infoEmpty: "Mostrando 0 a 0 de registros",
			infoFiltered: "(filtrado de _MAX_ registros totales)",
			paginate: {
				first: "Primero",
				last: "Último",
				next: "Siguiente",
				previous: "Anterior"
			}
		}
	});
}
/*
	$('#tablaCategorias').load("tablaCategoria.php", function () {

	// Aquí inicializas DataTable para la tabla con el ID #tablaGestorDataTable
	$('#tablaCategoriaDataTable').DataTable({		
		responsive: true,
		pageLength: 10,
		lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],
		language: {
			searchPlaceholder: "Buscar...",
			search: "",
			lengthMenu: "Mostrar _MENU_ registros por página",
			zeroRecords: "No se encontraron registros",
			info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
			infoEmpty: "Mostrando 0 a 0 de 0 registros",
			infoFiltered: "(filtrado de _MAX_ registros totales)",
			paginate: {
			first: "Primero",
			last: "Último",
			next: "Siguiente",
			previous: "Anterior"
			}
		}
		
		});
	});
*/