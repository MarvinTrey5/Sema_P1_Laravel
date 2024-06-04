<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="{{asset('styles/estilosh.css')}}">
</head>
<body>
<header class="base">
        <h1>RECICLAJE WEB2024 </h1>
        <a href="{{ url('/') }}">
            <img src="/styles/imgs/recicl.jpeg">
        </a>
    </header>
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
                    <li><a href="{{ url('/objetos/guardarR') }}">Agregar Objetos</a></li>
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
        <h2> BIENVENIDOS A LA PAGINA ABOUT <br> INFORMACIÓN SOBRE LOS CREADORES</h2>
        <article>
            <p class="base1">
                Queremos expresar nuestro más sincero agradecimiento al ingeniero y a todos los estudiantes por tomarse 
                el tiempo de visitar y explorar nuestra página web sobre el reciclaje. Su interés y participación son 
                fundamentales para el éxito de nuestra iniciativa, y estamos profundamente agradecidos por su apoyo y 
                compromiso con la sostenibilidad. Además, queremos destacar la importancia de la codificación en el 
                desarrollo de nuestra página. Gracias a un código eficiente y bien estructurado, hemos podido crear una 
                plataforma intuitiva y accesible que facilita el acceso a valiosa información y recursos sobre reciclaje. 
                Esperamos que la información proporcionada les sea de gran utilidad e inspire a continuar promoviendo 
                prácticas ecológicas. ¡Gracias por ser parte de este esfuerzo colectivo para cuidar nuestro planeta!
                <img src="https://static.vecteezy.com/system/resources/previews/000/252/843/large_2x/vector-modern-gradient-flat-line-concept-web-banner-of-computer-programmers-with-decorated-small-people-character-landing-page-template.jpg" alt="">          
            </p>
            <p>
                <ul>Elías Canales Pineda. SMSS124622</ul>
                <ul>Marvin Javier Santos Fernández. SMSS029022</ul>
                <ul>Yesy Emilia Benítez Rios. SMSS936120</ul>
                <ul>Mónica Alessandra Bonilla Escobar. SMSS144822</ul>
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