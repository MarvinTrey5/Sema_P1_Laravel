<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Principal</title>
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
                Bienvenido a nuestra página de reciclaje, tu destino central para descubrir prácticas sostenibles y 
                participar en iniciativas que promueven un futuro más verde. En este espacio dedicado al cuidado del
                medio ambiente, exploramos las últimas noticias, consejos prácticos y soluciones innovadoras para abordar 
                los desafíos ambientales de nuestro tiempo. Desde consejos simples para reducir el desperdicio en casa hasta 
                proyectos comunitarios de reciclaje y conservación, estamos comprometidos a inspirarte y empoderarte para 
                tomar medidas significativas en beneficio de nuestro planeta.         
                <img src="https://portaluniversidad.org.ar/wp-content/uploads/2023/04/1651089175.jpeg" >
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
                <img id="imagen" src="https://www.elespectador.com/resizer/n8VACrXkYkE3aBi_1H7a7mcuzLM=/920x613/filters:quality(60):format(jpeg)/www.elespectador.com/resizer/Osx_rrRTz1Ja3_nev_gL1KK9CK0=/arc-anglerfish-arc2-prod-elespectador/public/N6AJII6RANDFDCMBGIWCPSWXXI.JPG" alt="">
            </div>
            <div class="content">
                <p>
                    Son jornadas diarias que inician en la madrugada, de lunes a sábado, las que emprenden personas como 
                    María Rosa Arias, recicladora de oficio, quien hasta hace un tiempo llegaba a los edificios y conjuntos 
                    residenciales, donde recolecta el material, transportándose en un triciclo de pedal, lista a seleccionar
                    y recoger residuos aprovechables, aptos para una nueva vida.
                </p>
            </div>
        </div>
        <div class="card1">
            <div class="imagen">
                <img src="https://imagenes.eltiempo.com/files/image_652_366/uploads/2020/05/20/5ec5c8b21abbe.jpeg" alt="">
            </div>
            <div class="content">
                <p>
                    En una calle despejada del occidente de Bogotá, un reciclador se detuvo con su carreta cuando vio que 
                    había cartón dentro de una bolsa negra. Estaba en el barrio Salitre, en donde no es usual ver bolsas 
                    desperdigadas por la calle. Se acercó y sacó los pedazos de cartón con cuidado, con miedo a infectarse.
                    En el fondo de la bolsa vio un elemento extraño, un tubo azul, al parecer de plástico. Cuando abrió 
                    toda la bolsa se dio cuenta de que era una máscara de oxígeno.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <table>
            <caption>Lista De Trayectos</caption>
            <thead>
                <th>IdTrayecto</th>
                <th>Plazo</th>
                <th>Personal</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($trayectos as $trayecto)
                <tr>
                    <td>{{$trayecto->id_trayecto}}</td>
                    <td>{{$trayecto->plazo}}</td>
                    <td>{{$trayecto->personal}}</td>
                    <td>
                        <form action="{{route('formeditarT',$trayecto->id)}}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                        <form action="{{route('deleteT',$trayecto->id)}}" method="post">
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
                La tabla de trayecto, con sus campos clave como el ID de trayecto, plazo y personal asignado, juega un papel 
                fundamental en la gestión eficiente de los viajes y expediciones en nuestra plataforma. El ID de trayecto 
                proporciona una identificación única para cada ruta planificada, facilitando la organización y seguimiento de 
                múltiples viajes simultáneos. El plazo establece un horizonte temporal claro para completar cada trayecto, lo 
                que garantiza una planificación adecuada y una ejecución oportuna. Por último, el campo de personal asignado 
                especifica quiénes están a cargo de liderar y participar en cada expedición, asegurando una distribución 
                equitativa de responsabilidades y una colaboración efectiva en todas las etapas del viaje. Esta tabla proporciona
                un marco estructurado y organizado para gestionar nuestros trayectos, optimizando así la experiencia del usuario 
                y garantizando el éxito de cada aventura.      
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