// NOMBRE DE USUARIO
// Función para obtener el parámetro 'id' de la URL
/*
function getParameterByName(id) {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(id);
}

// Obtener el ID del usuario desde la URL
const userId = getParameterByName('id');

// Verificar que el ID está presente en la URL
if (userId) {
  // Hacer la solicitud AJAX para obtener el nombre del usuario
  fetch(`get_user.php?id=${userId}`)
    .then(response => response.json())
    .then(data => {
      if (data.username) {
        document.getElementById('userGreeting').textContent = `${data.username}`;
      } else {
        document.getElementById('userGreeting').textContent = "Usuario no encontrado";
      }
    })
    .catch(error => {
      console.error('Error al obtener el usuario:', error);
      document.getElementById('userGreeting').textContent = "Error al cargar el usuario";
    });
} else {
  document.getElementById('userGreeting').textContent = "ID de usuario no disponible";
}
*/
// TRADUCIR TABLA

// ORGANIZAR POR FECHAS
function enviarOpcion(opcion) {
    fetch('prueba.php', {
        method: 'POST',
        body: JSON.stringify({opcion: opcion}),
        headers: {'Content-Type': 'application/json'}
    })
    .then(response => response.json())
    .then(data => console.log(data));
	//event.preventDefault()
	//alert(opcion);
}

// ELIMINAR
function eliminar(id){
	if(confirm("¿Quieres eliminar este registro?")){
		$("#f"+ id).submit();}
}