// VER CONTRASEÑA
document.getElementById('togglePassword').addEventListener('click', function() {
  const passwordField = document.getElementById('yourPassword');
  const icon = this.querySelector('i');
  
  // Cambiar tipo de input
  const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordField.setAttribute('type', type);
  
  // Cambiar icono
  icon.classList.toggle('bi-eye');
  icon.classList.toggle('bi-eye-slash');
});
/*
// MENSAJE DE ERROR
const params = new URLSearchParams(window.location.search);
const error = params.get("error");
const mensaje = document.getElementById("mensaje-error");

if (error === "1") {
	mensaje.textContent = "Contraseña incorrecta";
	mensaje.style.display = "block";
} else if (error === "2") {
	mensaje.textContent = "Usuario no encontrado";
	mensaje.style.display = "block";
}

// RECORDAR USUARIO
function getCookie(name) {
const value = `; ${document.cookie}`;
const parts = value.split(`; ${name}=`);
if (parts.length === 2) return parts.pop().split(';').shift();
}

const savedUsername = getCookie("username");
if (savedUsername) {
document.getElementById("yourUsername").value = savedUsername;
}
*/