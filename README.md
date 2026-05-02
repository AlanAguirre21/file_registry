# file_registry
Aplicación web diseñada como gestor de archivos para digitalizar, organizar y clasificar documentos físicos de forma centralizada y eficiente.

## Descripción

FileRegistry es una solución web diseñada para centralizar y organizar 
documentos dispersos. Permite categorizar archivos, visualizarlos en 
tablas interactivas y gestionar un repositorio digital eficiente.

## Características

- Organización de documentos por categorías
- Visualización en tablas interactivas
- Sistema de búsqueda y filtrado
- Interfaz intuitiva y responsiva

## Tecnologías Utilizadas

- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript
- **Editor**: Sublime Text

## Instalación

### Requisitos Previos
- Apache
- MySQL
- PHP 7.0 o superior
- jQuery 3.7.1

### Pasos de Instalación

1. **Clonar o descargar el repositorio**
```bash
   git clone https://github.com/AlanAguirre21/FileRegistry.git
   cd FileRegistry
```

2. **Configurar la base de datos**
   - Crear una base de datos en MySQL
   - Importar el archivo de estructura de base de datos (si existe)
   - Editar el archivo `conexionBD.php` con las credenciales de tu servidor MySQL:
```php
     $host = "localhost";
     $user = "tu_usuario";
     $password = "tu_contraseña";
     $database = "nombre_bd";
```

3. **Colocar archivos en el servidor Apache**
   - Copiar todos los archivos del proyecto a la carpeta `htdocs` de Apache

4. **Verificar dependencias**
   - Asegurar que jQuery 3.7.1 esté incluido en el proyecto

5. **Acceder a la aplicación**
   - Abrir el navegador e ingresar a `http://localhost`

## Uso

### Acceso a la Aplicación

1. **Crear una cuenta de usuario**
   - En la pantalla de login, selecciona la opción de registro
   - Completa los datos requeridos y crea tu usuario

2. **Iniciar sesión**
   - Ingresa con tu usuario y contraseña

### Funcionalidades Principales

#### Gestión de Categorías
- Accede a la sección **"Categorías"**
- Crea nuevas categorías para organizar tus documentos
- Las categorías se visualizan en una tabla donde puedes editarlas o eliminarlas

#### Administración de Documentos
- Dirígete a la sección **"Administración"**
- Carga documentos usando el formulario de subida
- Asigna cada documento a una categoría específica
- Los documentos se organizan en una tabla para fácil visualización

#### Visualización y Descarga
- En la tabla de documentos, puedes **visualizar** archivos directamente
- También puedes **descargar** archivos a tu equipo

## Estado

🚧 En desarrollo - Corrigiendo errores y optimizando funcionalidades

## Autor

Alan Haziel Aguirre García
