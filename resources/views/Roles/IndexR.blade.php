<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Principal</title>
    <link rel="stylesheet" href="{{asset('styles/estilosh.css')}}">
</head>
<body>
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
                Bienvenido a nuestra página de roles, donde la colaboración encuentra su lugar y cada miembro de la 
                comunidad tiene un papel importante que desempeñar. Aquí, reconocemos que el éxito de cualquier 
                proyecto depende en gran medida de la asignación adecuada de responsabilidades y habilidades. 
                Desde administradores que lideran y organizan hasta colaboradores que aportan ideas frescas y 
                energía, cada rol tiene su propósito único en la construcción de un entorno de trabajo dinámico y 
                efectivo. Únete a nosotros mientras exploramos cómo cada uno de estos roles contribuye al éxito de 
                nuestra comunidad y cómo tú puedes encontrar tu lugar dentro de ella.          
                <img src="https://cdn.www.gob.pe/uploads/document/file/1923325/standard_01%20ok.jpeg.jpg.jpg" >
            </p>
        </article>
    </section>
    <section>
        <article>
            <p class="base1">
                Tabla de roles, cada entrada refleja la diversidad de talentos y responsabilidades que impulsan 
                nuestra comunidad hacia adelante. En la columna "Nombre", encontrará a nuestros valiosos miembros, 
                cuyas habilidades y compromiso son la columna vertebral de nuestro éxito. En la columna "Rol", 
                destacamos las distintas funciones que desempeñan, desde líderes visionarios hasta colaboradores 
                innovadores. Finalmente, en la columna "Conductor", señalamos quiénes están al volante, liderando 
                iniciativas y proyectos con determinación y pasión. Esta tabla no solo representa la variedad de 
                contribuciones individuales, sino que también celebra la colaboración y el trabajo en equipo que nos 
                impulsa hacia nuestros objetivos compartidos.        
            </p>
        </article>
    </section>
    <div class="comtainer">
        <div class="card1">
            <div class="imagen">
                <img id="imagen" src="https://www.tec.ac.cr/hoyeneltec/sites/default/files/media/uploads/noemy-chinchilla-bravo/1recolectores_informalespexels-1432478_opt_0.jpg" alt="">
            </div>
            <div class="content">
                <h2>Recicladores informales</h2>
                <p>
                    La iniciativa busca mejorar la calidad de vida de los recicladores de base al demostrar su eficiencia 
                    en la separación y recolección de residuos valorizables, aumentando el porcentaje del reciclaje en el país.
                </p>
            </div>
        </div>
        <div class="card1">
            <div class="imagen">
                <img src="https://estaticos.elcolombiano.com/documents/10157/0/580x365/0c0/0d0/none/11101/LQMT/image_content_35575910_20200418095337.jpg" alt="">
            </div>
            <div class="content">
                <h2>Recicladores de la tercera edad</h2>
                <p>
                    Los recicladores, en especial aquellos mayores de 60 años, quienes representan aproximadamente el 20% 
                    de la población que trabaja en este oficio, es decir, unas 12.000 personas, nos necesitan. Las empresas 
                    que nos unimos en esta iniciativa sabemos claramente que, en este momento, cuidarlos y apoyarlos 
                    fundamental para garantizar el reciclaje en el país.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <table>
            <caption>Lista De Roles</caption>
            <thead>
                <th>Nombre Rol</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->nombre_rol}}</td>
                    <td>{{$role->descripcion}}</td>
                    <td>
                        <form action="{{route('formeditarR',$role->id)}}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                        <form action="{{route('deleteR',$role->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Elimnar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <section>
        <article>
            <p class="base1">
                La tabla de roles es un elemento vital en nuestra comunidad, ya que proporciona una estructura 
                organizativa clave que garantiza una distribución equitativa de responsabilidades y habilidades. 
                Al asignar roles específicos a cada miembro, podemos optimizar la eficiencia y la productividad 
                de nuestros esfuerzos colaborativos. Además, la claridad en cuanto a quién es responsable de qué 
                tarea fomenta una comunicación más fluida y una toma de decisiones más eficaz. Esto no solo ayuda 
                a evitar la duplicación de esfuerzos, sino que también maximiza el aprovechamiento de los talentos 
                individuales. En última instancia, la tabla de roles promueve un ambiente de trabajo más organizado
                y centrado en objetivos, lo que nos permite alcanzar nuestros objetivos de manera más efectiva y 
                satisfactoria.       
            </p>
        </article>
    </section>
    </div>
    <footer>
        <span>
            Universidad Gerardo Barrios ☻ 2024
        </span>
    </footer>
</body>
</html>