document.getElementById('togglePassword').addEventListener('click', function() {
  const passwordField = document.getElementById('user_password');
  const icon = this.querySelector('i');
  
  // Cambiar tipo de input
  const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordField.setAttribute('type', type);
  
  // Cambiar icono
  icon.classList.toggle('bi-eye');
  icon.classList.toggle('bi-eye-slash');
});