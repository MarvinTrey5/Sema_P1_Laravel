<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
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
                Bienvenido a nuestra página dedicada a los objetos reciclables, donde exploramos el fascinante mundo 
                de la reutilización y el cuidado del medio ambiente. Aquí, nos sumergimos en la importancia de darle 
                una segunda vida a los materiales, desde el papel y el plástico hasta el vidrio y los metales. Nuestro 
                objetivo es inspirarte a repensar tu relación con los objetos cotidianos y a adoptar prácticas más 
                sostenibles en tu vida diaria. Desde consejos sobre cómo separar adecuadamente los materiales reciclables 
                hasta proyectos creativos de bricolaje con materiales reutilizados, te invitamos a descubrir nuevas formas
                de reducir tu huella ecológica y contribuir a un futuro más limpio y saludable para todos.         
                <img src="https://www.greenpeace.org/static/planet4-mexico-stateless/2019/07/cf5d6755-gp0stsx6e.jpg" >
            </p>
        </article>
    </section>
    <section>
        <article>
            <p class="base1">
                En nuestros cards de información, almacenamos datos clave sobre prácticas de reciclaje efectivas, 
                consejos para reducir residuos y estadísticas impactantes sobre el estado actual del medio ambiente. 
                Cada card es una ventana a la conciencia ambiental, ofreciendo información detallada sobre la 
                importancia del reciclaje, los beneficios de adoptar hábitos sostenibles y cómo cada uno de nosotros 
                puede marcar la diferencia. Desde cifras sobre la cantidad de plástico reciclado hasta estrategias 
                para una vida más eco-friendly, nuestros cards están diseñados para educar, inspirar y motivar a la 
                acción. Explora nuestra colección de cards y descubre cómo puedes contribuir a un futuro más limpio 
                y saludable para todos.        
            </p>
        </article>
    </section>
    <div class="comtainer">
        <div class="card1">
            <div class="imagen">
                <img id="imagen" src="https://www.latercera.com/resizer/WzCGm7DbejBmjyOKw3FgdikOGEA=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/AKNHGRLLJBF5BO3MD242TPQ6TU.jpg" alt="">
            </div>
            <div class="content">
                <p>
                    La vida en pandemia y el mayor tiempo en casa hizo visible la cantidad de residuos que día a día 
                    se transforman en basura. Pero además se sumó otro elemento, el aumento de los artículos de un 
                    solo uso como mascarillas o guantes, y los recipientes para comida para llevar, que elevaron esa 
                    basura domiciliaria.
                </p>
            </div>
        </div>
        <div class="card1">
            <div class="imagen">
                <img src="https://i.pinimg.com/736x/89/14/24/8914242a6b9aa96f53abd5264ece650a.jpg" alt="">
            </div>
            <div class="content">
                <p>
                    El reciclaje inteligente convierte grandes cúmulos de basura en objetos y materiales de valor para 
                    el uso cotidiano, además de transformarlos en medioambientalmente provechosos. La Semana del Reciclaje, 
                    en su segunda entrega que inició ayer, busca educar a jóvenes sobre el tema.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <table>
            <caption>Lista De Objetos</caption>
            <thead>
                <th>IdObjeto</th>
                <th>Nombre Objeto</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($objs as $obj)
                <tr>
                    <td>{{$obj->id_objeto}}</td>
                    <td>{{$obj->nombre_objeto}}</td>
                    <td>
                        <form action="{{route('formeditarO',$obj->id)}}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                        <form action="{{route('deleteO',$obj->id)}}" method="post">
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
                La tabla de objetos, con campos esenciales como el ID de objeto y el nombre del objeto, desempeña un papel 
                crucial en nuestro compromiso con el reciclaje y la sostenibilidad. El ID de objeto proporciona una identificación 
                única para cada material reciclable, lo que facilita su seguimiento y gestión dentro de nuestra plataforma. 
                Por otro lado, el nombre del objeto ofrece una descripción clara y precisa de cada material, permitiendo a nuestros 
                usuarios identificar fácilmente qué elementos pueden ser reciclados y cómo deben ser tratados. Esta tabla no solo 
                organiza nuestra base de datos de objetos reciclables, sino que también educa e informa a nuestra comunidad sobre la 
                diversidad de materiales que pueden ser reutilizados, promoviendo así una cultura de reciclaje más consciente y 
                comprometida.   
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