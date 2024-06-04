<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado De Usuarios</title>
    <link rel="stylesheet" href="{{asset('styles/estilosh.css')}}">
</head>
<body>
        <!-- Página Principal creada por Elias / Marvin-->
    <!-- Encabezado de la página-->
    <header class="base">
        <h1>RECICLAJE WEB2024 </h1>
        <a href="{{ url('/') }}">
            <img src="/styles/imgs/recicl.jpeg">
        </a>
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
    <section>
        <article>
            <p class="base1">
                En nuestra página de reciclaje, la tabla de usuarios es una herramienta fundamental para administrar 
                y organizar nuestra comunidad comprometida con el medio ambiente. Cada entrada en la tabla presenta un 
                ID único para identificar a los usuarios de manera precisa. Junto a este ID, se muestra el nombre del 
                usuario, permitiendo una rápida identificación y comunicación dentro de la plataforma. Además, el campo 
                ID de Rol especifica el nivel de acceso y responsabilidad de cada usuario, garantizando un equilibrio 
                adecuado de permisos y contribuciones en nuestras actividades de reciclaje. Esta estructura proporciona 
                una visión clara y completa de nuestra red de usuarios, promoviendo la colaboración y la eficacia en 
                nuestros esfuerzos por un mundo más sostenible.           
                <img src="https://conocimiento.blob.core.windows.net/conocimiento/2022/Contables/ContabilidadBancos/CasosPracticos/CP_Usuarios_y_perfiles/drex_usuarios_y_perfiles_custom.png" >
            </p>
        </article>
    </section>
    <section>
        <article>
            <p class="base1">
            En nuestra plataforma de reciclaje, los cards de información sobre países líderes en el reciclaje ofrecen 
            una ventana fascinante hacia el éxito ambiental a nivel global. Cada card destaca el nombre del país junto 
            con datos clave, como la cantidad de residuos reciclados o la tasa de reciclaje alcanzada. Estos cards no 
            solo informan, sino que también inspiran a nuestra comunidad, mostrando ejemplos concretos de cómo el 
            compromiso y las políticas efectivas pueden impactar positivamente en el medio ambiente. A través de esta
            presentación visual y accesible, invitamos a nuestros usuarios a aprender más sobre las prácticas exitosas 
            implementadas en estos países líderes y a reflexionar sobre cómo pueden contribuir a mejorar la 
            sostenibilidad en sus propias comunidades.          
            </p>
        </article>
    </section>
    <div class="comtainer">
        <div class="card1">
            <div class="imagen">
                <img id="imagen" src="https://www.derichebourgespana.com/wp-content/uploads/2018/12/paises_que_mas_reciclan.jpg" alt="">
            </div>
            <div class="content">
                <h2>Suiza</h2>
                <p>
                    Suiza
                    En los años 80, el país tuvo graves problemas de contaminación, los ríos estaban llenos de nitratos 
                    y fosfatos y el suelo por metales pesados. Optaron por tomar medidas drásticas y han funcionado. El 
                    reciclaje es obligatorio, de no hacerse las multas ascienden a los 10,000 euros.
                </p>
            </div>
        </div>
        <div class="card1">
            <div class="imagen">
                <img src="http://static.cceea.mx/blog/2018/01/vidrio_1.jpg" alt="">
            </div>
            <div class="content">
                <h2>Alemania</h2>
                <p>
                    Alemania
                    Este país logra reciclar el 62% de toda la basura que genera, comenzaron con el desuso de bolsas de plástico y le siguieron 
                    medidas de clasificación de residuos, educación ambiental desde edad temprana y conciencia social. Un ejemplo del compromiso 
                    de la sociedad alemana es el supermercado sin envases.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <table>
            <caption>Lista De Usuarios</caption>
            <thead>
                <th>IdUsuarios</th>
                <th>Nombre</th>
                <th>IdRol</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id_usuario}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->id_rol}}</td>
                    <td>
                        <form action="{{route('formeditar',$usuario->id)}}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                        <form action="{{route('delete',$usuario->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Elimnar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <footer>
        <span>
            Universidad Gerardo Barrios ☻ 2024
        </span>
    </footer>
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
</body>
</html>