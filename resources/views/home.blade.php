<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importancia Del Reciclaje</title>
    <link rel="stylesheet" href="{{asset('styles/estilosh.css')}}">
</head>
<body>
    <!-- Página Principal creada por Elias / Marvin-->
    <!-- Encabezado de la página-->
    <header>
        <h1>RECICLAJE WEB2024 </h1>
        <img src="styles/imgs/recicl.jpeg">
    </header>
    <!-- Navegación-->
    <nav>
        <ul class="horizontal">
            <li><a href="{{ url('/welcome') }}" target="_blank"> Pagina Base </a></li>
            <li>
                <a href="#">Usuarios</a>
                <ul class="menu">
                    <li><a href="{{ url('/usuarios/indexUs') }}">Listas De usuarios</a></li>
                    <li><a href="{{ url('/usuarios/guardar1') }}">Agregar Usuario</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Roles</a>
                <ul class="menu">
                    <li><a href="{{ url('/roles/indexR') }}">Listas De Roles</a></li>
                    <li><a href="{{ url('/roles/guardar2') }}">Agregar Rol</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Trayectos</a>
                <ul class="menu">
                    <li><a href="{{ url('/trayectos/IndexT') }}">Listas De Trayectos</a></li>
                    <li><a href="{{ url('/trayectos/guardarT') }}">Agregar Trayecto</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Objetos</a>
                <ul class="menu">
                    <li><a href="{{ url('/objetos/IndexO') }}">Listas De Objetos</a></li>
                    <li><a href="{{ url('/objetos/guardarR') }}">Agregar Trayecto</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Contenedores</a>
                <ul class="menu">
                    <li><a href="{{ url('/contents/IndexC') }}">Listas De Contenedores</a></li>
                    <li><a href="{{ url('/contents/guardarC') }}">Agregar Contenedores</a></li>
                </ul>
            </li>
            <li><a href="/about" target="_blank"> About </a></li>
        </ul>
    </nav>
    <!-- Container para los elementos. -->
    <section>
        <h2> BIENVENIDOS AL PORTAL <br> INFORMACIÓN SOBRE RECICLAJE</h2>
        <article>
            <p>
                Importancia de colocar la basura en su lugar:
                Evita la contaminación ambiental: La basura acumulada en lugares inapropiados contamina el suelo, el agua y el aire, 
                poniendo en riesgo la salud de las personas y los ecosistemas.
                Promueve el reciclaje: Separar los residuos facilita el proceso de reciclaje, permitiendo convertir materiales usados en nuevos productos.
                Mejora la imagen de Morazán: Un municipio limpio y ordenado es más atractivo para los turistas y residentes, impulsando el desarrollo local.                
                <img src="https://www.lineaverdehuelva.com/lv/consejos-ambientales/reciclaje/img/Beneficios-del-reciclaje.jpg" >
            </p>
        </article>
        <article>
            <p>
                Situación actual del reciclaje en Morazán:
                Planta de transferencia en San Francisco Gotera: aún no cuenta con los permisos del MARN para operar.
                Capacidad: 25 toneladas de material al día.
                Componentes: Reciclado, compostaje y transferencia.
                Costo de construcción: $1,600,000.
                Inicio de operaciones: Pendiente.
                Oportunidades:

                Creación de empleos verdes: El reciclaje genera empleos en la recolección, clasificación y procesamiento de materiales.
                Reducción de la contaminación ambiental: Disminuye la cantidad de residuos que van a los botaderos, protegiendo el medio ambiente.
                Ahorro de recursos naturales: Se reutilizan materiales que de otra forma se perderían.
                Generación de ingresos para las comunidades: La venta de materiales reciclados puede generar ingresos para las comunidades y organizaciones que lo gestionan.
                Recomendaciones:
                Separar la basura en casa: Clasificar los residuos en orgánicos, inorgánicos y reciclables.
                Utilizar los contenedores adecuados: Depositar la basura en los contenedores correspondientes para facilitar el reciclaje.
                Informarse sobre el reciclaje: Conocer los beneficios del reciclaje y cómo hacerlo correctamente.
                Participar en programas de reciclaje: Apoyar las iniciativas locales de reciclaje                
                <img src="https://www.foodnewslatam.com/images/stories/2016/Junio/reembolsaran-CDR-dinero-reciclado-bebidas.jpg" >
            </p>
        </article>
    </section>
    <footer>
        <span>
            Universidad Gerardo Barrios ☻ 2024
        </span>
    </footer>
</body>
</html>