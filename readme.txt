Integrantes

Canales Pineda, Elías.
Santos Fernández, Marvin Javier.
Bonilla Escobar, Mónica Alessandra.
Benítez Ríos, Yesy Emilia.

Proyecto: App Reciclaje.

Estudiantes De La Facultad Ciencia & Tecnología.
Carrera: Ingeniería En Sistemas Y Redes Informáticas.
Ing: William Alexix Montes Girón.
Fecha De Entrega: 09/06/2024.

Descripción:

Está App permite al usuario registrar tanto usuario, su rol,
trayecto, objeto y el contenedor de basura. Básicamente es una
app que puede utilizarse en una Universida, Empresa, Alcaldía.
Todos estos datos que el administrador serán enviados a una base de datos, utilizando PostgreSQL
donde las tablas no están relacionadas, en nuestra app consta de visualización agradable para
el administrador donde tendrá acceso através del menú de navegación podrá visualizar la lista
de cada información que el desea agrega, editar, eliminar. Además puedes observar nuestro Backup
de nuestra base de datos.
 
En la carpeta app encontrarás tanto los Models, Controles que hace funcionar la parte del backend
es básicamente donde accedemos a la base de datos.
En la carpeta database/migrations -> Encontrarás las tablas de nuestra base de datos.
En la carpeta resources/views -> Visualizarás los archivos que componen laravel y la página inicial
y nuestra página de información. Además Observarás carpetas creadas es porque como equipo decidimos
que cada tabla tenga su estilo y archivos.

En la carpeta routes -> Podrás visualizar los archivos .php esos archivos almacenan las rutas
que se establecieron para cada tabla. Y el archivo web.php almacena la funcion para obtener las
rutas que fueron creados en cada archivo de cada tabla.

Versiones: 
Laravel Framework 11.2.0
PHP 8.2.12

Pasos parar ejecutar nuestro proyecto.

1- Clonar nuestro repositorio.
2- En la carpeta del repositorio creado ejecuta su cmd(terminal).
3- Escibe el comando composer install -> permitirá utilizar las dependencias de php en este caso laravel.
4- Se genera un archivo .env.example editar el nombre por env. -> Gestionar la configuración de la base de datos.
5- Escribir el comando php artisan key:generate -> Permite gestionar la aplicaión.
6- Escribe el comando php artisan migrate -> Activará las migraciones de la base de datos definidas en nuestra aplicación.
7- Nos aparecerá una opción a la cuál escribis yes y esperamos y podrás visualizar nuestro proyecto.

Ahora puede ser en la terminal de cmd o en la visual studio code ejecutas el comando php artisan serve
Y podrás observar nuestra página principal y puedes agregar o ver listados entre otras cosas.
